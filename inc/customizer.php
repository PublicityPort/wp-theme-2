<?php
/**
 * understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function novapress_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'novapress_customize_register' );


function novapress_theme_customize_register( $wp_customize ) {
    
    // Primary color //
    $wp_customize->add_setting(
        'novapress_primary_color',
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_primary_color',
        array(
            'label'       => esc_html__( 'Primary Color', 'novapress' ),
            'section'     => 'colors',
            'settings'   => 'novapress_primary_color',
            'description' => __('Set the primary color used in the theme (menu, links, buttons, etc).', 'novapress'),
            'type' => 'customtext',
        )
    ));
    
    // Secondary color //
    $wp_customize->add_setting(
        'novapress_secondary_color',
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_secondary_color',
        array(
            'label'       => esc_html__( 'Secondary Color', 'novapress' ),
            'section'     => 'colors',
            'settings'   => 'novapress_secondary_color',
            'description' => __('Set the secondary color used in the theme.', 'novapress'),
            'type' => 'customtext',
        )
    ));
    
    // Sidebar BG color //
    $wp_customize->add_setting(
        'novapress_sidebar_bgcolor',
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_sidebar_bgcolor',
        array(
            'label'       => esc_html__( 'Sidebar Background Color', 'novapress' ),
            'section'     => 'colors',
            'settings'   => 'novapress_sidebar_bgcolor',
            'description' => __('Set the background color of the main sidebar (appears in single posts pages).', 'novapress'),
            'type' => 'customtext',
        )
    ));
    
    // Footer BG color //
    $wp_customize->add_setting( 'novapress_footer_bgcolor',
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_footer_bgcolor',
        array(
            'label'       => esc_html__( 'Footer Background Color', 'novapress' ),
            'section'     => 'colors',
            'settings'   => 'novapress_footer_bgcolor',
            'description' => __('Set the background color of the footer (bottom of each page).', 'novapress'),
            'type' => 'customtext',
        )
    ));
    
    // Top CTA BG color //
    $wp_customize->add_setting( 'novapress_topcta_bgcolor',
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_topcta_bgcolor',
        array(
            'label'       => esc_html__( 'Top Call-to-Action Background Color', 'novapress' ),
            'section'     => 'colors',
            'settings'   => 'novapress_topcta_bgcolor',
            'description' => __('Set the background color of the top Call-to-Action widget area (Mailchimp Form).', 'novapress'),
            'type' => 'customtext',
        )
    ));
    
    // Top Header BG color //
    $wp_customize->add_setting( 'novapress_topheader_bgcolor',
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_topheader_bgcolor',
        array(
            'label'       => esc_html__( 'Top Header Background Color', 'novapress' ),
            'section'     => 'colors',
            'settings'   => 'novapress_topheader_bgcolor',
            'description' => __('Set the background color of the top header (logo and menu area).', 'novapress'),
            'type' => 'customtext',
        )
    ));
    
    // TYPOGRAPHY SECTION //
    $wp_customize->add_section( 'novapress_typography_section' , 
        array(
            'title'       => __( 'Typography', 'novapress' ),
            'priority'    => 25,
            'description' => __( 'This section controls the font settings.', 'novapress' ),
    ) );
    
    /* Titles Font Style*/
    $wp_customize->add_setting('novapress_typography_title_font', 
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_typography_title_font', 
        array(
            'label'    => __( 'Titles Font Style', 'novapress' ),
            'settings' => 'novapress_typography_title_font',
            'section'  => 'novapress_typography_section',
            'description' => __( 'Select a font style for the titles.', 'novapress' ),
            'type' => 'customtext',
            'extra' => __( 'Select a font style for the titles. ', 'novapress' ),
        )
    ) );

    /* Titles Font Weight */
    $wp_customize->add_setting('novapress_typography_title_weight', 
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_typography_title_weight', 
        array(
            'label'    => __( 'Titles Font Weight', 'novapress' ),
            'settings' => 'novapress_typography_title_weight',
            'section'  => 'novapress_typography_section',
            'description' => __( 'Select a font weight for the titles.', 'novapress' ),
            'type' => 'customtext',
            'extra' => __( 'Select a font weight for the titles. ', 'novapress' ),
        ) 
    ));

    /* Body Font Style*/
    $wp_customize->add_setting('novapress_typography_body_font', 
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_typography_body_font', 
        array(
            'label'    => __( 'Body Font Style', 'novapress' ),
            'settings' => 'novapress_typography_body_font',
            'section'  => 'novapress_typography_section',
            'description' => __( 'Select a font style for the body.', 'novapress' ),
            'type' => 'customtext',
            'extra' => __( 'Select a font weight for the titles. ', 'novapress' ),
        )
    ) );

    /* Body Font Weight */
    $wp_customize->add_setting('novapress_typography_body_weight', 
        array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
    ) );
    
    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_typography_body_weight', 
        array(
            'label'    => __( 'Body Font Weight', 'novapress' ),
            'settings' => 'novapress_typography_body_weight',
            'section'  => 'novapress_typography_section',
            'description' => __( 'Select a font weight for the body.', 'novapress' ),
            'type' => 'customtext',
            'extra' => __( 'Select a font weight for the titles. ', 'novapress' ),
        )
    ) );

    // LAYOUT SECTION //
    $wp_customize->add_section( 'novapress_layout_section' , 
        array(
            'title'       => __( 'Layout', 'novapress' ),
            'priority'    => 30,
	) );
    
    $wp_customize->add_setting(
        'novapress_layout_copyright', array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
    ) );

    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_layout_copyright', 
        array(
            'label'     => __('Grid Layout Settings', 'novapress'),
            'section'   => 'novapress_layout_section',
            'type' => 'customtext',
            'settings'  => 'novapress_layout_copyright',
            'description' => __('Set the number of posts to appear in each row of the grid layout. This applies to the homepage, category and archives pages. The default is 3.', 'novapress'),
		)
    ));

    // FOOTER SECTION //
    $wp_customize->add_section( 'novapress_footer_section' , 
        array(
            'title'       => __( 'Footer', 'novapress' ),
            'priority'    => 35,
	) );
    
    // Footer Copyright //
    $wp_customize->add_setting(
        'novapress_footer_copyright', array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
    ) );

    $wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_footer_copyright', 
        array(
            'label'     => __('Copyright Text', 'novapress'),
            'section'   => 'novapress_footer_section',
            'type' => 'customtext',
            'settings'  => 'novapress_footer_copyright',
            'description' => __('Change the copyright text which appears at the bottom of the footer.', 'novapress'),
            'extra' => __('Change the copyright text which appears at the bottom of the footer.', 'novapress' ),
		)
    ));
    
    // Comments //
    $wp_customize->add_section(
        'novapress_comments_section' , 
        array(
            'title'       => __( 'Comments', 'novapress' ),
            'priority'    => 40,
	) );
    
	$wp_customize->add_setting('novapress_comments_toggle', array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
    ) );
    
	$wp_customize->add_control( new Novapress_Custom_Text_Control( $wp_customize,
        'novapress_comments_toggle',
        array(
            'label'     => __('Disable Comments', 'novapress'),
            'description' => __('If you have installed the Facebook Comments plugin, you can turn off the default comments form so as not to have duplicate comment sections (CHECK the box to DISABLE).', 'novapress'),
            'section'   => 'novapress_comments_section',
            'settings'  => 'novapress_comments_toggle',
            'type' => 'customtext',
        )
    ) );
}
add_action( 'customize_register', 'novapress_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function novapress_customize_preview_js() {
	wp_enqueue_script( 'novapress_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'novapress_customize_preview_js' );
