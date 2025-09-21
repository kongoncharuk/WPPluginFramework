<?php

namespace WPPluginFramework;

abstract class PFRestEndpoint extends PFExtension {
    /** Subclasses must provide these */
    abstract public function getNamespace(): string;

    abstract public function getRoute(): string;

    public function getArgs(string $method = 'GET'): array {
        return ['methods' => $method];
    }

    abstract public function run(\WP_REST_Request $request): \WP_REST_Response|\WP_Error;

    /** Registers the endpoint with WP REST API */
    public function register(): void {
        add_action('rest_api_init', function () {
            // Ensure route starts with a leading slash (e.g., '/auth')
            $route = $this->getRoute();
            if ($route !== '' && $route[0] !== '/') $route = '/' . $route;

            $args = $this->getArgs();
            $args['callback'] = [$this, 'run'];
            $args['permission_callback'] = '__return_true';

            $this->getLogger()->debug('Registering REST endpoint', ['namespace' => $this->getNamespace(), 'route' => $route, 'args' => $this->getArgs()]);
            register_rest_route($this->getNamespace(), $route, $args);
        });
    }
}