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