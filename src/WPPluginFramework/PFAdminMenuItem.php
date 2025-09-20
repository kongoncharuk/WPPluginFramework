<?php

namespace WPPluginFramework;

abstract class PFAdminMenuItem extends PFExtension {
    private string $page_title = '';
    private string $menu_title = '';
    private string $capability = '';
    private string $menu_slug = '';
    /** @var callable|string */
    private $callback = '';
    private string $icon_url = '';
    private ?int $position = null;

    /**
     * Optionally pass an array to seed values.
     * Supported keys: page_title, menu_title, capability, menu_slug, callback, icon_url, position
     */
    public function __construct(array $args = []) {
        if (array_key_exists('page_title', $args)) $this->page_title = (string)$args['page_title'];
        if (array_key_exists('menu_title', $args)) $this->menu_title = (string)$args['menu_title'];
        if (array_key_exists('capability', $args)) $this->capability = (string)$args['capability'];
        if (array_key_exists('menu_slug', $args)) $this->menu_slug = (string)$args['menu_slug'];
        if (array_key_exists('callback', $args)) $this->callback = $args['callback'];
        if (array_key_exists('icon_url', $args)) $this->icon_url = (string)$args['icon_url'];
        if (array_key_exists('position', $args)) $this->position = is_null($args['position']) ? null : (int)$args['position'];
        return $this;
    }

    // --- Builder setters (chainable) --
    public function setPageTitle(string $page_title): self {
        $this->page_title = $page_title;
        return $this;
    }

    public function setMenuTitle(string $menu_title): self {
        $this->menu_title = $menu_title;
        return $this;
    }

    public function setCapability(string $capability): self {
        $this->capability = $capability;
        return $this;
    }

    public function setMenuSlug(string $menu_slug): self {
        $this->menu_slug = $menu_slug;
        return $this;
    }

    /** @param callable|string $callback */
    public function setCallback($callback): self {
        $this->callback = $callback;
        return $this;
    }

    public function setIconUrl(string $icon_url): self {
        $this->icon_url = $icon_url;
        return $this;
    }

    public function setPosition(?int $position): self {
        $this->position = $position;
        return $this;
    }

    /** WP registration helper (throws if required fields missing). */
    public function register(): void {
        add_menu_page(
            $this->page_title,
            $this->menu_title,
            $this->capability,
            $this->menu_slug,
            $this->callback,
            $this->icon_url,
            $this->position
        );
    }
}