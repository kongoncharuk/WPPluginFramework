<?php
namespace WPPluginFramework;

abstract class PFAction extends PFExtension {
	abstract public function getName(): string;
	abstract public function run(array $args);

	/** Registers the action */
    public function register(): void {
        add_action($this->getName(), fn($args) => $this->run($args));
    }
}