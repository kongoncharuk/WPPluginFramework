<?php

namespace WPPluginFramework;

use Dotenv\Dotenv;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

abstract class PFExtension {
    protected function assertRequired(array $keys): void {
        foreach ($keys as $key) {
            if ($key === 'args') {
                if (empty($this->args)) throw new \InvalidArgumentException("'args' is required.");
            } else {
                if ($this->$key === '' || $this->$key === null) throw new \InvalidArgumentException("'$key' is required.");
            }
        }
    }

    protected function getConfig(): Config {
        return new Config();
    }

    /**
     * Get a Monolog logger.
     *
     * @param string|null $logLevel Monolog log level name (e.g. "DEBUG", "INFO"). If not specified setting 'LOG_LEVEL' from config is used. Defaults to "INFO".
     * @param string|null $loggerName Name for the logger (defaults to class name)
     */
    final protected function getLogger(?string $logLevel = null, ?string $loggerName = null): LoggerInterface {
        $levelName = strtoupper($logLevel ?? $this->getConfig()->get('LOG_LEVEL', 'INFO'));

        $level = class_exists(Level::class) ? Level::fromName($levelName) : Logger::toMonologLevel($levelName);

        $name = $loggerName ?? static::class;
        $logger = new Logger($name);

        $logger->pushHandler(new StreamHandler('php://stdout', $level));

        return $logger;
    }

    abstract public function register(): void;
}