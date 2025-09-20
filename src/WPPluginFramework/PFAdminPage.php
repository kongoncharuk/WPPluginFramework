<?php

namespace WPPluginFramework;

abstract class PFAdminPage extends PFExtension {
    abstract public function getMenu(): PFAdminMenuItem;

    abstract public function getPageContent(): string;
}