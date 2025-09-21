<?php

namespace WPPluginFramework;

abstract class PFFilter extends PFExtension {
    abstract public function getHookName(): string;

    abstract public function run(array $args);

    /** Registers the filter */
    public function register(): void {
        add_filter($this->getHookName(), fn($args) => call_user_func_array([$this, 'run'], func_get_args()));
    }
}