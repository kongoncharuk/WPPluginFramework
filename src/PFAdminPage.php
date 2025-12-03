<?php

namespace WPPluginFramework;

abstract class PFAdminPage extends PFExtension {
    abstract public function getMenu(): PFAdminMenuItem;

    abstract public function getPageContent(): string;

    /** Registers the admin page */
    public function register(): void {
        $menu = $this->getMenu();
        $menu->setCallback(fn() => $this->getPageContent());
        $menu->register();
    }
}
