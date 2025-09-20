<?php

use WPPluginFramework\PFExtension;

/** Find all loaded PFExtension subclasses and call ->register() */
function pf_register_all_extensions(): void {
    foreach (get_declared_classes() as $cls) {
        if (!is_subclass_of($cls, PFExtension::class)) continue;
        $ref = new ReflectionClass($cls);
        if ($ref->isAbstract()) continue;
        $obj = $ref->newInstance();
        if (method_exists($obj, 'register')) $obj->register();
    }
}