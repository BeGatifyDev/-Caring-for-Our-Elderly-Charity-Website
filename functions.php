<?php
/**
 * Theme Setup
 */
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
});

// ✅ Timber autoload (ensure Timber plugin is installed)
if ( ! class_exists( 'Timber' ) ) {
    add_action( 'admin_notices', function () {
        echo '<div class="error"><p>Timber plugin is required.</p></div>';
    } );
    return;
}

// ✅ Enqueue compiled CSS/JS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'old-age-charity-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );
    wp_enqueue_script(
        'old-age-charity-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
});

// ✅ Timber Context
add_filter('timber/context', function ($context) {
    $context['menu'] = new Timber\Menu('primary');
    $context['site'] = new Timber\Site();
    return $context;
});
function charity_theme_assets() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));
    // ✅ Add Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'charity_theme_assets');

// Register the menu location if not already done
add_action('after_setup_theme', function() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'old-age-charity')
    ]);
});

// Pass menu to Twig
add_filter('timber/context', function($context) {
    // Fetch a WordPress menu object (TimberMenu makes it Twig-friendly)
    $context['menu'] = new Timber\Menu('primary');
    return $context;
});
