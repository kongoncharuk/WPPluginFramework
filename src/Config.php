<?php

namespace WPPluginFramework;

use Dotenv\Dotenv;

class Config {
    private static ?array $config = null;

    public function __construct() {
        if (self::$config === null) {
            $root = defined('BASE_PATH') ? BASE_PATH : getcwd();
            if (is_string($root) && is_dir($root)) {
                $dotenv = Dotenv::createImmutable($root);
                $dotenv->safeLoad();
            }

            self::$config = $_ENV;
        }
    }

    public function get(string $key, $default = null) {
        return self::$config[$key] ?? $default;
    }

    public function getAll(): array {
        return self::$config ?? [];
    }

    public function set(array $config): void {
        self::$config = $config;
    }

    public function has(string $key): bool {
        return isset(self::$config[$key]);
    }
}