<?php
namespace WPPluginFramework;

// Stubs for WordPress functions and classes used by the framework.
function add_action(string $hook, Callable $func) {}
function add_filter(string $hook, Callable $func) {}
function add_menu_page(string $title, string $menuTitle, string $capability, string $menuSlug, Callable $func, string $icon_url, int $position) {}
function register_rest_route(string $namespace, string $route, array $args = []) {}
function sanitize_title(string $title): string { return ''; }
function wp_update_post($postData, $wp_error = false) { return 1; }
function wp_insert_post($postData, $wp_error = false) { return 1; }
function is_wp_error($result): bool { return false; }
function update_post_meta(int $postId, string $metaKey, $metaValue): void {}
function get_page_by_path(string $path, string $output = null, string $post_type = 'page') { return null; }
function get_page_by_title(string $title, string $output = null, string $post_type = 'page') { return null; }
class WP_Post {}
class WP_REST_Request {}