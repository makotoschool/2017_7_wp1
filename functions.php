﻿<?php

function child_theme_scripts( ) {
     wp_enqueue_style( 'parent-theme-css', get_template_directory_uri( ) . '/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );


