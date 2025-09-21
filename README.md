# Wordpress Plugin Framework
The framework provides basic code structure for Wordpress Plugins as well as necessary features such as configuration and logging. 

It supports the following plugin functionality:
- admin pages
- rest endpoints
- actions
- filters

Additionally:
- provides config loader
- centralised logging via Monolog logger
- templating

The framework is based on a couple of base classes that define type of an Wordpress extension the plugin adds (admin page, rest endpoint, etc) and all extensions are expected to:
1. Extend the base class
2. Register the extension in PluginRegistry.

Base classes are:
- PFAdminPage.php
- PFRestEndpoint.php
- PFAction.php
- PFFilter.php

They all extend PFExtension.php that loads log and creates Monologue logger to be reused via getLogger() and getConfig() of the classes inheriting it.

## Examples
### Admin page

1. Create a new class in your plugin that extends PFAdminPage.
2. Implement methods getMenuItem() and getPageContent()
3. At your plugin .php file register your class with PluginRegistry::register()

Here's how it will look in practice:
```php
# src/MyAdminPage.php

import WPPluginFramework/PFAdminPage;

class MyAdminPage extends PFAdminPage {
	public function getMenu() {
		return (new PFAdminMenuItem())
			->setPageTitle("My menu")
			->setMenuTitle("My menu")
			->setMenuSlug("my_menu")
			->setCapability("list_users");
	}

	public function getPageContent() {
		return 'Hello from my amdin page!';
	}
}
```

### Rest endpoint
1. Extends PFRestEndpoint.
2. Implement methods getMenuItem() and getPageContent()
3. At your plugin .php file register your class with PluginRegistry::register()

Here's how it will look in practice:
```php
# src/MyRestEndpoint.php

import WPPluginFramework/PFRestEndpoint;

class MyRestEndpoint extends PFRestEndpoint {
	public function getNamespace(): string { return 'pf/v1'; }
    public function getRoute(): string { return '/hello'; }
    public function getArgs(): array { return ['methods'  => 'GET']; }

    public function run(WP_REST_Request $request): string {
    	return json_encode(['result' => 'hello here']);
    }
}
```

### Action or Filter
1. Extends PFAction or PFFilter.
2. Implement methods getName() and run()
3. At your plugin .php file register your class with PluginRegistry::register()

Here's how it will look in practice:
```php
# src/MyAction.php

import WPPluginFramework/PFAction;

class MyAction extends PFAction {
	public function getHookName(): string { return 'init'; }
    
    public function run($args) {
    	// act!
    }
}
```

### Page
```php
# src/MyPage.php

import WPPluginFramework/PFPage;

class AboutUsPage extends PFPage {
	public function getTitle(): string { return 'About Us'; }
    public function getSlug(): string { return 'about'; }
    public function getContent(): string {
        return '<h1>About</h1><p>Our story…</p>';
    }
}
```

## Suggested folder structure

It doesn't really matter for the framework where files are located as long as they are imported in your plugin file, but probably something based on extension type would make sense. For example:
```
- src
	- pages
		- admin
		- user
	- filters
	- actions
```

## Loading extensions

To properly load extension you need to:
1. Import all extension classes in your plugin .php file, so all those that extend PFPage, PFAction, etc.
2. Include WPPluginFramework/Loader
3. Call `Loader::autoload()`. This will automatically search for all loaded classes that extend PFExtension and call method `register()` for each of them. You can also load them manually my simply creating an instance of each class and calling `register()` for it.

Simple example with autoload:
```php
/*
 * Plugin Name: My awesome plugin
 */

import Pages/Admin/MyAdminPage;
import Pages/User/AboutUsPage;
import WPPluginFramework/Loader;

Loader::autoload();

```