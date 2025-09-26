<?php
namespace WPPluginFramework;

abstract class PFShortcode extends PFExtension {
	abstract public function getTagName(): string;
	abstract public function run(array $args);

	/** Registers the shortcode */
    public function register(): void {
        add_shortcode(
            $this->getTagName(),
            function (...$args) {
                return $this->run($args);   // $args is an array of all passed args
            }
        );
    }
}