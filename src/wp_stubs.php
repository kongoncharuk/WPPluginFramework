<?php
// Stubs for WordPress functions and classes used by the framework.
function add_action(string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1): bool {
    return true;
}
function add_filter(string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1): bool {
    return true;
}
function add_menu_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function, string $icon_url = '', int $position = null): string|false {
    return '';
}
function register_rest_route(string $namespace, string $route, array $args = []): bool {
    return true;
}
function sanitize_title(string $title): string {
    return '';
}
function wp_update_post(int|WP_Post $post, bool $wp_error = false): int|WP_Error {
    return 1;
}
function wp_insert_post(int|WP_Post $post, bool $wp_error = false): int|WP_Error {
    return 1;
}
function is_wp_error(mixed $result): bool {
    return false;
}
function update_post_meta(int $post_id, string $meta_key, mixed $meta_value): int|false {
    return 1;
}
function get_page_by_path(string $page_path, string $output = OBJECT, string $post_type = 'page'): WP_Post|array|null {
    return null;
}
function get_page_by_title(string $page_title, string $output = OBJECT, string $post_type = 'page'): WP_Post|array|null {
    return null;
}
function has_action(string $hook_name, callable|false $callback = false): bool {
    return false;
}
function has_filter(string $hook_name, callable|false $callback = false): bool {
    return false;
}
function do_action(string $hook_name, ...$args): void {}
function apply_filters(string $hook_name, mixed $value, ...$args): mixed {
    return $value;
}
function menu_page_url(string $menu_slug, bool $echo = true): string {
    return '';
}
function wp_set_current_user(int $id, string $name = ''): WP_User {
    return new WP_User();
}
function current_user_can(string $capability, mixed ...$args): bool {
    return true;
}
function wp_delete_user(int $id, int $reassign = null): bool {
    return true;
}
function rest_do_request(WP_REST_Request $request): WP_REST_Response {
    return new WP_REST_Response();
}
function wp_get_current_user(): WP_User {
    return new WP_User();
}
function get_current_user_id(): int {
    return 1;
}
function is_user_logged_in(): bool {
    return true;
}
function wp_logout(): void {}
function wp_redirect(string $location, int $status = 302, string $x_redirect_by = 'WordPress'): void {}
function update_user_meta(int $user_id, string $meta_key, mixed $meta_value, mixed $prev_value = null): int|bool {
    return true;
}
function absint(mixed $maybeint): int {
    return 0;
}
function activate_plugin(string $plugin, string $redirect = '', bool $network_wide = false, bool $silent = false): null|WP_Error {
    return null;
}
function activate_plugins(array $plugins, string $redirect = '', bool $network_wide = false, bool $silent = false): true|WP_Error {
    return true;
}
function addslashes_gpc(array $gpc): array {
    return [];
}
function addslashes_arrays_only(mixed $value): mixed {
    return null;
}
function add_allowed_options(array $new_options, array $options = []): array {
    return [];
}
function add_blog_option(int $id, string $option, mixed $value): bool {
    return false;
}
function add_clean_index(string $table, string $index): true {
    return true;
}
function add_comments_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_comment_meta(int $comment_id, string $meta_key, mixed $meta_value, bool $unique = false): int|false {
    return 1;
}
function add_cssclass(string $class_to_add, string|array $classes): string {
    return '';
}
function add_dashboard_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_existing_user_to_blog(array|false $details = false): true|WP_Error {
    return true;
}
function add_feed(string $feedname, callable $callback): string {
    return '';
}
function add_link(): int|WP_Error {
    return 1;
}
function add_links_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_magic_quotes(array $input_array): array {
    return [];
}
function add_management_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_media_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_menu_classes(array $menu): array {
    return [];
}
function add_meta(int $post_id): int|bool {
    return 1;
}
function add_metadata(string $meta_type, int $object_id, string $meta_key, mixed $meta_value, bool $unique = false): int|false {
    return 1;
}
function add_network_option(int|null $network_id, string $option, mixed $value): bool {
    return false;
}
function add_object_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, string $icon_url = ''): string {
    return '';
}
function add_option(string $option, mixed $value = '', string $deprecated = '', bool|null $autoload = null): bool {
    return false;
}
function add_options_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_option_whitelist(array $new_options, array $options = []): array {
    return [];
}
function add_pages_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_ping(int|WP_Post $post, string $uri): int|false {
    return 1;
}
function add_plugins_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_posts_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, int $position = null): string|false {
    return '';
}
function add_post_meta(int $post_id, string $meta_key, mixed $meta_value, bool $unique = false): int|false {
    return 1;
}
function add_query_arg(string|array $key, string $value = '', string $url = ''): string {
    return '';
}
function add_role(string $role, string $display_name, array $capabilities = []): WP_Role|null {
    return null;
}
function add_site_meta(int $site_id, string $meta_key, mixed $meta_value, bool $unique = false): int|false {
    return 1;
}
function add_site_option(string $option, mixed $value): bool {
    return false;
}
function add_permastruct(string $name, string $struct, array $args = []): void {}
function add_post_type_support(): void {}
function add_rewrite_endpoint(): void {}
function add_rewrite_rule(): void {}
function add_rewrite_tag(): void {}
function add_screen_option(): void {}
function add_settings_error(): void {}
function add_settings_field(): void {}
function add_settings_section(): void {}
function add_shortcode(): void {}
function add_submenu_page(): void {}
function add_term_meta(): void {}
function add_theme_page(): void {}
function add_theme_support(): void {}
function add_thickbox(): void {}
function add_user(): void {}
function add_users_page(): void {}
function add_user_meta(): void {}
function add_user_to_blog(int $blog_id, int $user_id, string $role): true|WP_Error {
    return true;
}
function add_utility_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = null, string $icon_url = ''): string {
    return '';
}
function adjacent_image_link(bool $prev = true, string|int $size = 'thumbnail', bool $text = false): void {}
function adjacent_posts_rel_link(string $title = '%title', bool $in_same_cat = false, string $excluded_categories = ''): void {}
function adjacent_posts_rel_link_wp_head(string $title = '%title', bool $in_same_cat = false, string $excluded_categories = ''): void {}
function adjacent_post_link(string $format, string $link, bool $in_same_cat = false, string $excluded_categories = '', bool $previous = true, string $taxonomy = 'category'): void {}
function admin_color_scheme_picker(int $user_id): void {}
function admin_created_user_email(string $text): string {
    return '';
}
function admin_url(string $path = '', string $scheme = 'admin'): string {
    return '';
}
function allowed_http_request_hosts(bool $is_external, string $host): bool {
    return false;
}
function allowed_tags(): string {
    return '';
}
function allow_subdirectory_install(): bool {
    return false;
}
function allow_subdomain_install(): bool {
    return false;
}
function antispambot(string $email_address, int $hex_encoding = 0): string {
    return '';
}
function apache_mod_loaded(string $mod, bool $default_value = false): bool {
    return false;
}
function apply_block_hooks_to_content(string $content, WP_Block_Template|WP_Post|array|null $context = null, callable $callback): string {
    return '';
}
function apply_block_hooks_to_content_from_post_object(string $content, WP_Post|null $post = null, callable $callback): string {
    return '';
}
function apply_filters_deprecated(string $hook_name, array $args, string $version, string $replacement = null, string $message = null): mixed {
    return null;
}
function apply_filters_ref_array(string $hook_name, array $args): mixed {
    return null;
}
function apply_shortcodes(string $content, bool $ignore_html = false): string {
    return '';
}
function atom_enclosure(): void {}
function atom_site_icon(): void {}
function attachment_id3_data_meta_box(WP_Post $post): void {}
function attachment_submitbox_metadata(WP_Post $post): void {}
function attachment_submit_meta_box(WP_Post $post): void {}
function attachment_url_to_postid(string $url): int {
    return 0;
}
function attribute_escape(string $text): string {
    return '';
}
function author_can(int|WP_Post $post, string $capability, mixed $args): bool {
    return false;
}
function auth_redirect(): void {}
function automatic_feed_links(bool $add = true): void {}
function avoid_blog_page_permalink_collision(array $data, array $postarr): array {
    return [];
}
function background_color(): void {}
function background_image(): void {}
function backslashit(string $value): string {
    return '';
}
function balanceTags(string $text, bool $force = false): string {
    return '';
}
function before_last_bar(string $text): string {
    return '';
}
function block_core_file_ensure_interactivity_dependency(array $hooked_block_type, array $context): void {}
function block_core_image_ensure_interactivity_dependency(array $hooked_block_type, array $context): void {}
function block_core_navigation_submenu_build_css_colors(array $context, array $attributes, bool $is_sub_menu = false): array {
    return [];
}
function block_core_query_ensure_interactivity_dependency(array $hooked_block_type, array $context): void {}
function block_editor_rest_api_preload(array $preload_data, WP_Block_Editor_Context $block_editor_context): array {
    return [];
}
function block_footer_area(): void {}
function block_has_support(WP_Block_Type $block_type, string|array $feature, mixed $default_value = false): bool {
    return false;
}
function block_header_area(): void {}
function block_template_part(string $area): void {}
function block_version(string $content): int {
    return 0;
}
function bloginfo(string $show = ''): void {}
function bloginfo_rss(string $show = ''): void {}
function body_class(string|array $class = ''): void {}
function bool_from_yn(string $yn): bool {
    return false;
}
function build_comment_query_vars_from_block(WP_Block $block): array {
    return [];
}
function build_query(string|array $data): string|array {
    return [];
}
function build_query_vars_from_query_block(WP_Block $block, int $page): array {
    return [];
}
function bulk_edit_posts(string $doaction, array $post_ids): void {}
function cache_javascript_headers(): void {}
function cache_users(array $user_ids): void {}
function calendar_week_mod(int $num): int {
    return 0;
}
function cancel_comment_reply_link(string $text = ''): void {}
function can_edit_network(int $network_id): bool {
    return false;
}
function capital_P_dangit(string $text): string {
    return '';
}
function category_description(int $category): string {
    return '';
}
function category_exists(int|string $cat_name): int|null {
    return null;
}
function cat_is_ancestor_of(int|object $cat1, int|object $cat2): bool {
    return false;
}
function checked(mixed $checked, mixed $current = true, bool $echo = true): string {
    return '';
}
function check_admin_referer(string $action, string $query_arg = '_wpnonce'): void {}
function check_ajax_referer(string $action, string $query_arg = '_wpnonce', bool $die = true): void {}
function check_and_publish_future_post(int $post_id): void {}
function check_column(string $table_name, string $col_name, string $col_info): void {}
function check_comment(string $author, string $email, string $url, string $comment, string $user_ip, string $user_agent, string $comment_type): int {
    return 0;
}
function check_comment_flood_db(array $commentdata): bool {
    return false;
}
function check_import_new_users(string $permission): bool {
    return false;
}
function check_password_reset_key(string $key, string $login): WP_User|WP_Error {
    return new WP_User();
}
function check_theme_switched(): void {}
function check_upload_mimes(array $mimes): array {
    return [];
}
function check_upload_size(array $file): bool {
    return false;
}
function choose_primary_blog(): void {}
function clean_attachment_cache(int $id, bool $clean_terms = false): void {}
function clean_blog_cache(int $blog_id): void {}
function clean_bookmark_cache(int $bookmark_id): void {}
function clean_category_cache(int $id): void {}
function clean_comment_cache(int $id): void {}
function clean_dirsize_cache(string $path): void {}
function clean_network_cache(int $id): void {}
function clean_object_term_cache(int $id, string|array $taxonomy): void {}
function clean_page_cache(int $id): void {}
function clean_post_cache(int $id): void {}
function clean_pre(array $array): string {
    return '';
}
function clean_site_details_cache(int $site_id): void {}
function clean_taxonomy_cache(string $taxonomy): void {}
function clean_term_cache(int|array $ids, string|array $taxonomy = '', bool $clean_terms = true): void {}
function clean_url(string $url, array $protocols = null, string $context = 'display'): string {
    return '';
}
function clean_user_cache(int $id): void {}
function clear_global_post_cache(int $post_id): void {}
function codepress_footer_js(): void {}
function codepress_get_lang(string $filename): string {
    return '';
}
function comments_link(string $deprecated = '', string $deprecated_2 = ''): void {}
function comments_link_feed(): void {}
function comments_number(string $zero = 'No Comments', string $one = '1 Comment', string $more = '% Comments', string $deprecated = ''): void {}
function comments_open(int|WP_Post $post = null): bool {
    return false;
}
function comments_popup_link(string $zero = 'No Comments', string $one = '1 Comment', string $more = '% Comments', string $css_class = '', string $none = 'Comments Off'): void {}
function comments_popup_script(int $width = 400, int $height = 400): void {}
function comments_rss(): void {}
function comments_rss_link(string $link_text = 'Comments RSS'): void {}
function comments_template(string $file = '/comments.php', bool $separate_comments = false): void {}
function comment_author(int|WP_Comment $comment_id = 0): void {}
function comment_author_email(int|WP_Comment $comment_id = 0): void {}
function comment_author_email_link(string $linktext = '', string $before = '', string $after = '', int|WP_Comment $comment = null): void {}
function comment_author_IP(int|WP_Comment $comment_id = 0): void {}
function comment_author_link(int|WP_Comment $comment_id = 0): void {}
function comment_author_rss(int|WP_Comment $comment_id = 0): void {}
function comment_author_url(int|WP_Comment $comment_id = 0): void {}
function comment_author_url_link(string $linktext = '', string $before = '', string $after = '', int|WP_Comment $comment = null): void {}
function comment_class(string|array $class = '', int|WP_Comment $comment_id = null, int|WP_Post $post_id = null, bool $echo = true): void {}
function comment_date(string $d = '', int|WP_Comment $comment_id = 0): void {}
function comment_excerpt(int|WP_Comment $comment_id = 0): void {}
function comment_exists(string $comment_author, string $comment_date, string $comment_content): mixed {
    return null;
}
function comment_footer_die(string $msg): void {}
function comment_form(array $args = [], int|WP_Post $post = null): void {}
function comment_form_title(string $noreplytext = 'Leave a Reply', string $replytext = 'Leave a Reply to %s', bool $linktoparent = true): void {}
function comment_guid(int|WP_Comment $comment_id = 0): void {}
function comment_ID(): void {}
function comment_id_fields(int|WP_Post $post = null): void {}
function comment_link(int|WP_Comment $comment = null, string $deprecated = ''): void {}
function comment_reply_link(array $args = [], int|WP_Comment $comment = null, int|WP_Post $post = null): void {}
function comment_text(int|WP_Comment $comment_id = 0, array $args = []): void {}
function comment_text_rss(int|WP_Comment $comment_id = 0): void {}
function comment_time(string $d = '', int|WP_Comment $comment_id = 0): void {}
function comment_type(int|WP_Comment $comment_id = 0): void {}
function compression_test(): void {}
function confirm_another_blog_signup(string $domain, string $path, string $blog_title, string $user_name, string $user_email = '', array $meta = []): void {}
function confirm_blog_signup(string $domain, string $path, string $blog_title, string $user_name, string $user_email = '', array $meta = []): void {}
function confirm_delete_users(array $users): void {}
function confirm_user_signup(string $user_name, string $user_email): void {}
function content_url(string $path = ''): string {
    return '';
}
function convert_chars(string $content, string $deprecated = ''): string {
    return '';
}
function convert_invalid_entities(string $content): string {
    return '';
}
function convert_smilies(string $text): string {
    return '';
}
function convert_to_screen(string $text): string {
    return '';
}
function copy_dir(string $from, string $to, array $skip_list = []): bool {
    return false;
}
function core_auto_updates_settings(string $type): void {}
function core_update_footer(string $msg = ''): void {}
function core_upgrade_preamble(WP_Upgrader $upgrader = null): void {}
function count_many_users_posts(array $users, string $post_type = 'post', bool $public_only = false): array {
    return [];
}
function count_users(string $strategy = 'time'): array {
    return [];
}
function count_user_posts(int $userid, string $post_type = 'post', bool $public_only = false): int {
    return 0;
}
function create_empty_blog(string $domain, string $path, string $weblog_title, int $site_id): int|WP_Error {
    return 1;
}
function create_initial_post_types(): void {}
function create_initial_rest_routes(): void {}
function create_initial_taxonomies(): void {}
function create_initial_theme_features(): void {}
function create_user(string $username, string $password, string $email = ''): int|WP_Error {
    return 1;
}
function current_action(): string {
    return '';
}
function current_datetime(): \DateTimeImmutable {
    return new \DateTimeImmutable();
}
function current_filter(): string {
    return '';
}
function current_theme_info(): void {}
function current_theme_supports(string $feature, mixed $args): bool {
    return false;
}
function current_time(string $type, int $gmt = 0): int|string {
    return 0;
}
function current_user_can_for_blog(int $blog_id, string $capability, mixed $args): bool {
    return false;
}
function current_user_can_for_site(int $site_id, string $capability, mixed $args): bool {
    return false;
}
function customize_themes_print_templates(): void {}
function dashboard_browser_nag_class(array $classes): array {
    return [];
}
function dashboard_php_nag_class(array $classes): array {
    return [];
}
function date_i18n(string $format, int|bool $timestamp_with_offset = false, bool $gmt = false): string {
    return '';
}
function dbDelta(string|array $queries = '', bool $execute = true): array {
    return [];
}
function deactivated_plugins_notice(): void {}
function deactivate_plugins(array $plugins, bool $silent = false, bool|null $network_wide = null): bool {
    return false;
}
function deactivate_sitewide_plugin(string $plugin): void {}
function dead_db(): void {}
function debug_fclose(mixed $fp): bool {
    return false;
}
function debug_fopen(string $filename, string $mode): mixed {
    return null;
}
function debug_fwrite(mixed $fp, string $string): bool {
    return false;
}
function default_password_nag(): void {}
function default_password_nag_edit_user(int $user_ID, WP_User $old_data): void {}
function default_password_nag_handler(bool $errors = false): void {}
function default_topic_count_scale(int $count): int {
    return 0;
}
function default_topic_count_text(int $count, string $topic_name): string {
    return '';
}
function delete_all_user_settings(): void {}
function delete_blog_option(int $id, string $option): bool {
    return false;
}
function delete_comment_meta(int $comment_id, string $meta_key, mixed $meta_value = ''): bool {
    return false;
}
function delete_expired_transients(): int {
    return 0;
}
function delete_get_calendar_cache(): void {}
function delete_meta(int $mid): bool {
    return false;
}
function delete_metadata(string $meta_type, int $object_id, string $meta_key, mixed $meta_value = '', bool $delete_all = false): bool {
    return false;
}
function delete_metadata_by_mid(string $meta_type, int $meta_id): bool {
    return false;
}
function delete_network_option(int|null $network_id, string $option): bool {
    return false;
}
function delete_option(string $option): bool {
    return false;
}
function delete_plugins(array $plugins, string $context = 'plugins'): mixed {
    return null;
}
function delete_post_meta(int $post_id, string $meta_key, mixed $meta_value = ''): bool {
    return false;
}
function delete_post_meta_by_key(string $post_meta_key): bool {
    return false;
}
function delete_post_thumbnail(int|WP_Post $post): bool {
    return false;
}
function delete_site_meta(int $site_id, string $meta_key, mixed $meta_value = ''): bool {
    return false;
}
function delete_site_meta_by_key(string $meta_key): bool {
    return false;
}
function delete_site_option(string $option): bool {
    return false;
}
function delete_site_transient(string $transient): bool {
    return false;
}
function delete_term_meta(int $term_id, string $meta_key, mixed $meta_value = ''): bool {
    return false;
}
function delete_theme(string $stylesheet, string $redirect = ''): void {}
function delete_transient(string $transient): bool {
    return false;
}
function delete_usermeta(int $user_id, string $meta_key): bool {
    return false;
}
function delete_users_add_js(): void {}
function delete_user_meta(int $user_id, string $meta_key, mixed $meta_value = ''): bool {
    return false;
}
function delete_user_option(int $user_id, string $option, bool $global = false): bool {
    return false;
}
function delete_user_setting(string $user_setting): void {}
function deslash(string $content): string {
    return '';
}
function determine_locale(): string {
    return '';
}
function did_action(string $hook_name): int {
    return 0;
}
function did_filter(string $hook_name): int {
    return 0;
}
function disabled(mixed $disabled, mixed $current = true, bool $echo = true): string {
    return '';
}
function discover_pingback_server_uri(string $url, string $content): string {
    return '';
}
function dismissed_updates(string $type): array {
    return [];
}
function dismiss_core_update(object $update): void {}
function display_header(): void {}
function display_header_text(): void {}
function display_plugins_table(): void {}
function display_setup_form(string $error = null): void {}
function display_space_usage(): void {}
function display_theme(array $theme): void {}
function display_themes(): void {}
function documentation_link(string $for): void {}
function doing_action(string $hook_name): bool {
    return false;
}
function doing_filter(string $hook_name): bool {
    return false;
}
function domain_exists(string $domain, string $path, int $site_id = 1): int|null {
    return null;
}
function download_url(string $url, int $timeout = 300, bool $signature_verification = false): string|WP_Error {
    return '';
}
function do_accordion_sections(string $screen, string $context, array $sections): void {}
function do_action_deprecated(string $hook_name, array $args, string $version, string $replacement = null, string $message = null): void {}
function do_action_ref_array(string $hook_name, array $args): void {}
function do_activate_header(): void {}
function do_all_enclosures(): void {}
function do_all_pingbacks(): void {}
function do_all_pings(): void {}
function do_all_trackbacks(): void {}
function do_blocks(string $content): string {
    return '';
}
class WP_Post {}

class WP_User {
    public function __construct(int|string $id = 0, string $name = '', string $site_id = '') {}
}

class WP_REST_Request {
    public function get_json_params(): array {
        return [];
    }
    public function get_header(string $key): string|null {
        return '';
    }
    public function get_params(): array {
        return [];
    }
    public function get_body(): string {
        return '';
    }
}

class WP_REST_Response {
    public function __construct(mixed $data = null, int $status = 200, array $headers = []) {}
}

class WP_Error {
    public function __construct(string|int $code = '', string $message = '', mixed $data = '') {}
}

class WP_Role {}

class WP_Block_Template {}

class WP_Block_Editor_Context {}

class WP_Block_Type {}

class WP_Block {}

class WP_Comment {}

class WP_Upgrader {}
