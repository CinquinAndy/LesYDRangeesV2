<?php

namespace App\Blocs;

use Extended\ACF\Location;

abstract class Bloc
{
    public static $name = '';
    public static $label = '';
    public static $icon = '';

    public static function register(): void
    {
        acf_register_block([
            'name' => static::$name,
            'title' => static::$label ?: static::$name,
            'category' => wp_get_theme()->template,
            'icon' => static::$icon,
            'render_callback' => function () {
                static::render();
            },
        ]);
        register_extended_field_group([
            'title' => static::$name . ' Bloc',
            'fields' => static::fields(),
            'location' => array_merge([
                Location::where('block', 'acf/' . static::$name)
            ], static::location())
        ]);
    }

    protected static function render(): void
    {
        echo get_template_part('bloc/' . static::$name);
    }

    protected static function fields(): array
    {
        return [];
    }

    protected static function location(): array
    {
        return [];
    }
}

?>
