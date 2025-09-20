<?php

namespace WPPluginFramework;

abstract class PFFilter extends PFExtension {
    abstract public function getName(): string;

    abstract public function run(array $args);

    /** Registers the filter */
    public function register(): void {
        add_filter($this->getName(), fn($args) => $this->run($args));
    }
}