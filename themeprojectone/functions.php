<?php

	/**
	 * Enqueue Function for Google Fonts, jQuery 3.4.0, and Custom Styles & Scripts
	 */

	function tpo_enqueue_scripts() {
		/**
		 * Google Fonts
		 */
		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700|Lato:300,400,700', [], '1.0.0', 'all' );

		/**
		 * Font-Awesome
		 */
		wp_enqueue_style( 'font-awesome-5.8.1', '//use.fontawesome.com/releases/v5.8.1/css/all.css', [], '1.0.0', 'all' );

		/**
		 * Custom Styles
		 */
		wp_enqueue_style( 'main-custom-style', get_template_directory_uri() . '/css/style.css', [], '1.0.0', 'all' );

		/**
		 * jQuery work-around
		 */
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jQuery', '//code.jquery.com/jquery-3.4.0.js', [], '3.4.0', true );

		/**
		 * Custom Scripts
		 * 1. Front Page
		 * 2. Blog Page
		 */
		if ( is_front_page() ) {
			wp_enqueue_script( 'front-page-script', get_template_directory_uri() . '/js/front.js', [], '1.0.0', true );
		} else {
			wp_enqueue_script( 'blog-page-script', get_template_directory_uri() . '/js/blog.js', [], '1.0.0', true );
		}

	}

	add_action( 'wp_enqueue_scripts', 'tpo_enqueue_scripts' );

	/**
	 * Add theme functions
	 */
	function tpo_theme_options() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( [
			'social_links'     => __( 'Social Icons', 'themeprojectone' ),
			'contacts_info'    => __( 'Contacts Info', 'themeprojectone' ),
			'nav_menu'  => __( 'Nav Menu', 'themeprojectone' ),
			'footer_nav_menu'  => __( 'Footer Right Nav Menu', 'themeprojectone' ),
		] );
	}

	add_action( 'after_setup_theme', 'tpo_theme_options' );

	/**
	 * Allow additional mimes
	 *
	 * @param array $mimes
	 *
	 * @return array
	 */

	function tpo_additional_mimes( array $mimes = [] ) {
		$mimes['svg'] = 'image/svg+xml';

		return $mimes;
	}

	add_action( 'upload_mimes', 'tpo_additional_mimes' );


