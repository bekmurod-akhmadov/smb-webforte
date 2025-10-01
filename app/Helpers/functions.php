<?php

use App\Models\SiteSettings;
use App\Models\SiteTranslation;
use Illuminate\Support\Facades\Cache;

if (! function_exists('site_setting')) {
    function site_setting(string $key, mixed $default = null): mixed
    {
        // Загружаем все настройки разом и кэшируем на час
        $settings = Cache::remember('site_settings_all', 3600, function () {
            return SiteSettings::all()->pluck('value', 'name')->toArray();
        });

        return $settings[$key] ?? $default;
    }
}

if (! function_exists('translator')) {
    function translator($category, $key = null, $replace = [], $locale = null)
    {
        $locale = $locale ?: app()->getLocale();

        // Поддержка вызова типа translator('menu.home')
        if ($key === null && str_contains($category, '.')) {
            [$category, $key] = explode('.', $category, 2);
        }

        if ($key === null) {
            return $category;
        }

        // Загружаем все переводы разом и кэшируем на час
        $translations = Cache::remember('site_translations_all', 3600, function () {
            return SiteTranslation::all()
                ->mapToGroups(function ($row) {
                    return [$row->category => [$row->key => $row->value]];
                })
                ->map(fn ($group) => $group->collapse())
                ->toArray();
        });

        $value = $translations[$category][$key] ?? $key;

        // Если значение хранится в JSON (['en' => ..., 'ru' => ...])
        if (is_array($value) && isset($value[$locale])) {
            $value = $value[$locale];
        } elseif (is_array($value)) {
            $value = reset($value); // fallback
        }

        // Подставляем плейсхолдеры :key
        foreach ($replace as $k => $v) {
            $value = str_replace(':'.$k, $v, $value);
        }

        return $value;
    }
}
