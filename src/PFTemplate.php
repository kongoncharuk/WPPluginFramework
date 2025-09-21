<?php

namespace WPPluginFramework;

class PFTemplate {
    protected string $templateName;

    public function __construct(string $templateName) {
        $this->templateName = $templateName;
        return $this;
    }

    public function render(array $context = []): string {
        return 'template rendered';
    }
}