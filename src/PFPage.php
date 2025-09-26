<?php

namespace WPPluginFramework;

abstract class PFPage extends PFExtension {
    abstract public function getTitle(): string;

    public function getContent(): string { return ''; }
    public function getSlug(): string { return '';}  // if empty, WP derives from title
    public function getStatus(): string { return 'publish'; }
    public function getAuthor(): ?int { return null; }
    public function getParent(): ?int { return null; }
    public function getTemplate(): string { return ''; }
    public function getMeta(): array { return []; }
    public function getExcerpt(): string { return ''; }

    /**
     * Create or update the page (idempotent). Returns page ID.
     */
    public function update(?string $logLevel = null): int {
        if (!$this->hasChanged()) {
            return 0; // No change, skip update
        }

        $logger = $this->getLogger($logLevel);

        $title = trim($this->getTitle());
        if ($title === '') throw new \InvalidArgumentException('PFPage: "title" is required.');

        $content = $this->getContent();
        $slug = sanitize_title($this->getSlug());
        $status = $this->getStatus();
        $author = $this->getAuthor();
        $parent = $this->getParent();
        $template = $this->getTemplate();
        $meta = $this->getMeta();
        $excerpt = $this->getExcerpt();

        if ($content === '') $logger->warning('PFPage: creating/updating a page with empty content.', ['title' => $title]);

        $existing = $this->findExisting($slug, $title);

        $postarr = [
            'post_title' => $title,
            'post_content' => $content,
            'post_status' => $status,
            'post_type' => 'page',
            'post_excerpt' => $excerpt,
        ];
        if ($slug !== '') $postarr['post_name'] = $slug;
        if (!is_null($author)) $postarr['post_author'] = $author;
        if (!is_null($parent)) $postarr['post_parent'] = $parent;

        if ($existing) {
            $postarr['ID'] = $existing->ID;
            $result = wp_update_post($postarr, true);
            if (is_wp_error($result)) throw new \RuntimeException('PFPage update failed: ' . $result->get_error_message());
            $pageId = (int)$result;
            $logger->info('PFPage updated', ['id' => $pageId, 'slug' => $slug, 'title' => $title]);
        } else {
            $result = wp_insert_post($postarr, true);
            if (is_wp_error($result)) throw new \RuntimeException('PFPage insert failed: ' . $result->get_error_message());
            $pageId = (int)$result;
            $logger->info('PFPage created', ['id' => $pageId, 'slug' => $slug, 'title' => $title]);
        }

        if ($template !== '') update_post_meta($pageId, '_wp_page_template', $template);
        foreach ($meta as $k => $v) update_post_meta($pageId, $k, $v);

        return $pageId;
    }

    private function findExisting(string $slug, string $title): ?\WP_Post {
        if ($slug !== '') {
            $page = get_page_by_path($slug, OBJECT, 'page');
            if ($page instanceof \WP_Post) return $page;
        }
        if ($title !== '') {
            $page = get_page_by_title($title, OBJECT, 'page');
            if ($page instanceof \WP_Post) return $page;
        }
        return null;
    }

    public function register(): void {
        add_action('init', fn() => $this->update('INFO'));
    }

    public function getHash(): string {
        return md5($this->getTitle() . '|' .
            $this->getSlug() . '|' .
            $this->getContent() . '|' .
            $this->getStatus() . '|' .
            $this->getAuthor() . '|' .
            $this->getParent() . '|' .
            $this->getTemplate() . '|' .
            implode('|', array_map(fn($k,$v) => $k.'='.$v, array_keys($this->getMeta()), $this->getMeta())) . '|' .
            $this->getExcerpt()
        );
    }

    public function hasChanged(): bool {
        $pageCacheFile = WP_CONTENT_DIR.'/cachedPages.json';
        if (file_exists($pageCacheFile)) {
            $pageVersions = json_decode(file_get_contents($pageCacheFile), true);
            if (!is_array($pageVersions)) $pageVersions = [];
            if (isset($pageVersions[$this->getSlug()]) && $pageVersions[$this->getSlug()] === $this->getHash()) {
                return false; // No change
            }
            return true; // Changed
        } else {
            $pageVersions = [];
            $pageVersions[$this->getSlug()] = $this->getHash();
            file_put_contents($pageCacheFile, json_encode($pageVersions));
            return true; // Changed
        }
    }
}