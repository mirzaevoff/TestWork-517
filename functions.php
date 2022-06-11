<?php

add_action( 'wp_enqueue_scripts', 'rd_enqueue_styles' );
function rd_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( $parenthandle ),
        $theme->get('Version')
    );
}

// --------------


// Developer utility for debugging ( dumping )
function rd_dump($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}