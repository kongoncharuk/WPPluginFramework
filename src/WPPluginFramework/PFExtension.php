<?php

namespace WPPluginFramework;

use Dotenv\Dotenv;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

abstract class PFExtension {
    private static ?array $config = null;

    protected function assertRequired(array $keys): void {
        foreach ($keys as $key) {
            if ($key === 'args') {
                if (empty($this->args)) throw new \InvalidArgumentException("'args' is required.");
            } else {
                if ($this->$key === '' || $this->$key === null) throw new \InvalidArgumentException("'$key' is required.");
            }
        }
    }

    protected function getConfig(): array {
        if (self::$config === null) {
            $root = defined('BASE_PATH') ? BASE_PATH : getcwd();
            if (is_string($root) && is_dir($root)) {
                $dotenv = Dotenv::createImmutable($root);
                $dotenv->safeLoad();
            }

            self::$config = $_ENV;
        }
        return self::$config ?? [];
    }

    /**
     * Get a Monolog logger.
     *
     * @param string|null $logLevel Monolog log level name (e.g. "DEBUG", "INFO")
     * @param string|null $loggerName Name for the logger (defaults to class name)
     */
    protected function getLogger(?string $logLevel = null, ?string $loggerName = null): LoggerInterface {
        $levelName = $logLevel ?? 'INFO';
        $level = class_exists(\Monolog\Level::class)
            ? \Monolog\Level::fromName(strtoupper($levelName))
            : Logger::toMonologLevel(strtoupper($levelName));

        $logger = new Logger($loggerName ?? static::class);
        $logger->pushHandler(new StreamHandler('php://stdout', $level));

        return $logger;
    }

    abstract public function register(): void;
}