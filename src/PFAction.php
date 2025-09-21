<?php
namespace WPPluginFramework;

abstract class PFAction extends PFExtension {
	abstract public function getHookName(): string;
	abstract public function run(array $args);

	/** Registers the action */
    public function register(): void {
        add_action(
            $this->getHookName(),
            function (...$args) {
                return $this->run($args);   // $args is an array of all passed args
            },
            10,
            99 // accept up to 99 args from WP
        );
    }
}