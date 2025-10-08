<?php

use App\Models\SiteSettings;

if (! function_exists('site_setting')) {
    function site_setting(string $key, mixed $default = null): mixed
    {
        $setting = SiteSettings::where('name', $key)->value('value');
        return $setting ?? $default;
    }
}
