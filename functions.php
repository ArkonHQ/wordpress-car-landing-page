<?php
function ev_theme_assets() {
    // Enable Vite dev server mode for HMR
    $is_dev = true;

    // --- DEVELOPMENT MODE (Vite dev server running) ---
    if ( $is_dev ) {
        // Load from Vite dev server (HMR enabled)
        wp_enqueue_script( 'vite-client', 'http://localhost:5173/@vite/client', [], null, true );
        wp_enqueue_script( 'theme-scripts', 'http://localhost:5173/src/main.js', [], null, true );
    }
    // --- PRODUCTION MODE ---
    else {
        // Get manifest data (Vite 5+ puts it in .vite folder)
        $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';
        if ( file_exists( $manifest_path ) ) {
            $manifest = json_decode( file_get_contents( $manifest_path ), true );
            if ( isset( $manifest['src/main.js'] ) ) {
                // Enqueue compiled JS
                wp_enqueue_script(
                    'theme-scripts',
                    get_template_directory_uri() . '/dist/' . $manifest['src/main.js']['file'],
                    [],
                    null,
                    true
                );
                // Enqueue compiled CSS
                if ( isset( $manifest['src/main.js']['css'][0] ) ) {
                    wp_enqueue_style(
                        'theme-styles',
                        get_template_directory_uri() . '/dist/' . $manifest['src/main.js']['css'][0]
                    );
                }
            }
        }
    }
}
add_action( 'wp_enqueue_scripts', 'ev_theme_assets' );

// Add type="module" to Vite scripts
add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {
    if ( in_array( $handle, [ 'vite-client', 'theme-scripts' ] ) ) {
        return '<script type="module" src="' . esc_url( $src ) . '"></script>';
    }
    return $tag;
}, 10, 3 );

function ev_theme_seo_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'ev_theme_seo_setup' );

function ev_theme_expert_meta_tags() {
    if ( is_admin() ) return;
    $site_name   = get_bloginfo( 'name' );
    $site_desc   = get_bloginfo( 'description' ) ?: 'Experience the future of mobility with our cutting-edge electric vehicles. Reserve your EV today.';
    $current_url = home_url( add_query_arg( null, null ) );
    
    if ( is_singular() ) {
        global $post;
        $title       = get_the_title() . ' - ' . $site_name;
        $description = wp_trim_words( $post->post_content, 25, '...' );
        if ( empty( $description ) ) $description = $site_desc;
    } else {
        $title       = $site_name . ' - ' . $site_desc;
        $description = $site_desc;
    }
    
    $og_image = get_template_directory_uri() . '/assets/front-view.png';
    if ( is_singular() && has_post_thumbnail() ) {
        $og_image = get_the_post_thumbnail_url( null, 'large' );
    }

    echo "\n";
    echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />' . "\n";
    echo '<link rel="canonical" href="' . esc_url( $current_url ) . '" />' . "\n";
    echo '<meta property="og:locale" content="' . esc_attr( get_locale() ) . '" />' . "\n";
    echo '<meta property="og:type" content="' . ( is_singular() ? 'article' : 'website' ) . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $current_url ) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '" />' . "\n";
    echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />' . "\n";
    echo '<meta property="og:image:width" content="1200" />' . "\n";
    echo '<meta property="og:image:height" content="630" />' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url( $og_image ) . '" />' . "\n";
    echo "\n";
}
add_action( 'wp_head', 'ev_theme_expert_meta_tags', 1 );