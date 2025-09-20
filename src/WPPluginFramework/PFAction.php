<?php
namespace WPPluginFramework;

abstract class PFAction extends PFExtension {
	abstract public function getHookName(): string;
	abstract public function run(array $args);

	/** Registers the action */
    public function register(): void {
        add_action($this->getHookName(), fn($args) => $this->run($args));
    }
}