<?php

use App\Models\PageContent;

/**
 * Load all active content for a given page (single query, cached per request).
 */
function _page_content_load(string $page): array
{
    static $cache = [];

    if (!isset($cache[$page])) {
        try {
            $records = PageContent::where('page', $page)
                ->where('is_active', true)
                ->get();

            $cache[$page] = [];
            foreach ($records as $record) {
                $cache[$page][$record->section][$record->key] = $record;
            }
        } catch (\Throwable) {
            $cache[$page] = [];
        }
    }

    return $cache[$page];
}

if (!function_exists('content_value')) {
    /**
     * Return a text value from page_contents, with fallback if not set.
     */
    function content_value(string $page, string $section, string $key, ?string $fallback = null): ?string
    {
        $cache  = _page_content_load($page);
        $record = $cache[$section][$key] ?? null;

        if ($record && !is_null($record->value) && $record->value !== '') {
            return $record->value;
        }

        return $fallback;
    }
}

if (!function_exists('content_image')) {
    /**
     * Return an image URL from page_contents, with asset fallback if not set.
     */
    function content_image(string $page, string $section, string $key, ?string $fallback = null): string
    {
        $cache  = _page_content_load($page);
        $record = $cache[$section][$key] ?? null;

        if ($record && !empty($record->image_path)) {
            return asset('storage/' . $record->image_path);
        }

        return asset($fallback ?? '');
    }
}
