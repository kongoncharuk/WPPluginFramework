<?php
namespace WPPluginFramework;

abstract class PFAction extends PFExtension {
	abstract public function getHookName(): string;
	abstract public function run(array $args);

	/** Registers the action */
    public function register(): void {
        add_filter($this->getHookName(), fn($args) => call_user_func([$this, 'run'], func_get_args()));
    }
}