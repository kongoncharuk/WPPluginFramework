<?php

namespace WPPluginFramework;

abstract class PFRestEndpoint extends PFExtension {
    /** Subclasses must provide these */
    abstract public function getNamespace(): string;

    abstract public function getRoute(): string;

    public function getArgs(): array {
        return [];
    }

    abstract public function run(WP_REST_Request $request): string;

    /** Registers the endpoint with WP REST API */
    public function register(): void {
        register_rest_route($this->getNamespace(), $this->getRoute(), $this->getArgs());
    }
}