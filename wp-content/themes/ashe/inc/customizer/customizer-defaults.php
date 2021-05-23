<?php

function ashe_options( $control ) {

	$ashe_defaults = array(
		'skins_select' => 'default',
		'skins_dark_mode' => true,
		'colors_content_accent' => '#ca9b52',
		'colors_content_bg' => '#ffffff',
		'colors_header_bg' => '#ffffff',
		'general_sidebar_width' => '270',
		'general_sidebar_sticky' => true,
		'general_home_layout' => 'col1-rsidebar',
		'general_header_width' => 'contained',
		'general_slider_width' => 'boxed',
		'general_links_width' => 'boxed',
		'general_content_width' => 'boxed',
		'general_single_width' => 'boxed',
		'general_footer_width' => 'contained',
		'top_bar_label' => true,
		'header_image_label' => true,
		'header_image_bg_image_size' => 'cover',
		'title_tagline_logo_width' => '500',
		'main_nav_label' => true,
		'main_nav_align' => 'center',
		'main_nav_show_search' => true,
		'main_nav_show_sidebar' => true,
		'main_nav_merge_menu' => false,
		'main_nav_simple_header' => false,
		'main_nav_mini_logo' => '',
		'main_nav_mini_logo_width' => '70',
		'featured_slider_label' => true,
		'featured_slider_location' => 'both',
		'featured_slider_source' => 'posts',
		'featured_slider_display' => 'all',
		'featured_slider_category' => 'null',
		'featured_slider_amount' => '3',
		'featured_slider_exc_images' => false,
		'featured_slider_navigation' => true,
		'featured_slider_pagination' => true,
		'featured_links_label' => false,
		'featured_links_location' => 'both',
		'featured_links_title_1' => '',
		'featured_links_url_1' => '',
		'featured_links_image_1' => '',
		'featured_links_title_2' => '',
		'featured_links_url_2' => '',
		'featured_links_image_2' => '',
		'featured_links_title_3' => '',
		'featured_links_url_3' => '',
		'featured_links_image_3' => '',
		'blog_page_post_description' => 'excerpt',
		'blog_page_post_pagination' => 'default',
		'blog_page_show_categories' => true,
		'blog_page_show_date' => true,
		'blog_page_show_comments' => true,
		'blog_page_show_dropcaps' => true,
		'blog_page_show_author' => true,
		'blog_page_show_facebook' => false,
		'blog_page_show_twitter' => false,
		'blog_page_show_pinterest' => false,
		'blog_page_show_google' => false,
		'blog_page_show_linkedin' => false,
		'blog_page_show_reddit' => false,
		'blog_page_show_tumblr' => false,
		'blog_page_related_orderby' => 'related',
		'single_page_show_featured_image' => true,
		'single_page_show_categories' => true,
		'single_page_show_date' => true,
		'single_page_show_author' => true,
		'single_page_show_comments' => true,
		'single_page_show_author_desc' => true,
		'single_page_related_orderby' => 'related',
		'social_media_window' => true,
		'social_media_icon_1' => 'facebook',
		'social_media_url_1' => '',
		'social_media_icon_2' => 'twitter',
		'social_media_url_2' => '',
		'social_media_icon_3' => 'instagram',
		'social_media_url_3' => '',
		'social_media_icon_4' => 'pinterest',
		'social_media_url_4' => '',
		'typography_logo_family' => 'Open+Sans',
		'typography_nav_family' => 'Open+Sans',
		'typography_nav_italic' => false,
		'typography_nav_uppercase' => true,
		'page_footer_copyright' => '',
		'page_footer_show_scrolltop' => true,
		'preloader_label' => false,
		'responsive_featured_slider' => true,
		'responsive_featured_links' => false,
		'responsive_related_posts' => false,
		'responsive_menu_icon' => 'chevron-down',
		'responsive_mobile_icon_text' => 'Menu',
	);

	// merge defaults and options
	$ashe_defaults = wp_parse_args( get_option('ashe_options'), $ashe_defaults );

	// return control
	return $ashe_defaults[ $control ];

}