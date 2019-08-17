<?php
/**
 * akad Theme Customizer
 *
 * @package akad
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function akad_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'akad_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'akad_customize_partial_blogdescription',
        ) );
    }
}
add_action( 'customize_register', 'akad_customize_register' );



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function akad_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function akad_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function akad_customize_preview_js() {
    wp_enqueue_script( 'akad-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'akad_customize_preview_js' );







// *** Add my customizer ***
//*******************************************

function zef_register_theme_customizer( $wp_customize ) {

// *  add customizer-section    "Display Options"
    $wp_customize->add_section(
        'zef_display_options',
        array(
            'title'     => 'Display Options',
            'priority'  => 200
        )
    );

    //**   add customizer-section   label   "Display Header?"
    $wp_customize->add_setting(
        'zef_display_header',
        array(
            'default'    =>  'true',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        'zef_display_header',
        array(
            'section'   => 'zef_display_options',
            'label'     => 'Display Header?',
            'type'      => 'checkbox'

        )
    );

//*   add customizer-section     "Hero content"

    $wp_customize->add_section(
        'zef_content_hero',
        array(
            'title'     => 'Hero',
            'priority'  => 201
        )
    );

    //**   add customizer-section   label   "Up title"

        $wp_customize->add_setting(
            'zef_content_hero__general-up-title',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__general-up-title',
                array(
                    'label'      => __( 'Up title', 'zef' ),
                    'settings'   => 'zef_content_hero__general-up-title',
                    'section'    => 'zef_content_hero'
                )
            )
        );


    //**   add customizer-section   label   "General title"

        $wp_customize->add_setting(
            'zef_content_hero__general-title',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__general-title',
                array(
                    'label'      => __( 'General title', 'zef' ),
                    'settings'   => 'zef_content_hero__general-title',
                    'section'    => 'zef_content_hero',
                    'type'       => 'textarea'
                )
            )
        );


    //**   add customizer-section   label   "General text"

        $wp_customize->add_setting(
            'zef_content_hero__general-text',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__general-text',
                array(
                    'label'      => __( 'General text', 'zef' ),
                    'settings'   => 'zef_content_hero__general-text',
                    'section'    => 'zef_content_hero',
                    'type'       => 'textarea'
                )
            )
        );



    //**   add customizer-section   label   "Image"

        $wp_customize->add_setting(
            'zef_content_hero__content-image',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'zef_content_hero__content-image',
                array(
                    'label'      => __( 'Upload a image', 'zef' ),
                    'settings'   => 'zef_content_hero__content-image',
                    'section'    => 'zef_content_hero'
                )
            )
        );

    //**   add customizer-section   label   "Content title"
        $wp_customize->add_setting(
            'zef_content_hero__content-title',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__content-title',
                array(
                    'label'      => __( 'Content title', 'zef' ),
                    'settings'   => 'zef_content_hero__content-title',
                    'section'    => 'zef_content_hero',
                    'type'       => 'textarea'
                )
            )
        );

    //**   add customizer-section   label   "Content text"
        $wp_customize->add_setting(
            'zef_content_hero__content-text',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__content-text',
                array(
                    'label'      => __( 'Content text', 'zef' ),
                    'settings'   => 'zef_content_hero__content-text',
                    'section'    => 'zef_content_hero',
                    'type'       => 'textarea'
                )
            )
        );
    //**   add customizer-section   label   "Content text"
        $wp_customize->add_setting(
            'zef_content_hero__content-button',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_hero__content-button',
                array(
                    'label'      => __( 'Content button', 'zef' ),
                    'settings'   => 'zef_content_hero__content-button',
                    'section'    => 'zef_content_hero',
                    'type'       => 'text'
                )
            )
        );

//*   add customizer-section     "Why Choose Us"
    $wp_customize->add_section(
        'zef_content_why-choose-us',
        array(
            'title'     => 'Why Choose Us',
            'priority'  => 210
        )
    );

    //**   add customizer-section   label   "General title"
        $wp_customize->add_setting(
            'zef_content_why-choose-us__general-title',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_why-choose-us__general-title',
                array(
                    'label'      => __( 'General title', 'zef' ),
                    'settings'   => 'zef_content_why-choose-us__general-title',
                    'section'    => 'zef_content_why-choose-us',
                    'type'       => 'textarea'
                )
            )
        );
    //**   add customizer-section   label   "General title"
        $wp_customize->add_setting(
            'zef_content_why-choose-us__general-text',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_why-choose-us__general-text',
                array(
                    'label'      => __( 'General title', 'zef' ),
                    'settings'   => 'zef_content_why-choose-us__general-text',
                    'section'    => 'zef_content_why-choose-us',
                    'type'       => 'textarea'
                )
            )
        );
    //**   add customizer-section   label   "Image"

    $wp_customize->add_setting(
        'zef_content_why-choose-us_image',
        array(
            'default'    =>  '',
            'transport'  =>  'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'zef_content_why-choose-us_image',
            array(
                'label'      => __( 'Upload a image', 'zef' ),
                'settings'   => 'zef_content_why-choose-us_image',
                'section'    => 'zef_content_why-choose-us'
            )
        )
    );

//*   add customizer-section     "Our portfolio"
    $wp_customize->add_section(
        'zef_content_our-portfolio',
        array(
            'title'     => 'Our portfolio',
            'priority'  => 220
        )
    );

    //**   add customizer-section   label   "General title"
    $wp_customize->add_setting(
        'zef_content_our-portfolio__general-title',
        array(
            'default'    =>  '',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'zef_content_our-portfolio__general-title',
            array(
                'label'      => __( 'General title', 'zef' ),
                'settings'   => 'zef_content_our-portfolio__general-title',
                'section'    => 'zef_content_our-portfolio',
                'type'       => 'textarea'
            )
        )
    );


    //**   add customizer-section   label   "General text"
    $wp_customize->add_setting(
        'zef_content_our-portfolio__general-text',
        array(
            'default'    =>  '',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'zef_content_our-portfolio__general-text',
            array(
                'label'      => __( 'General text', 'zef' ),
                'settings'   => 'zef_content_our-portfolio__general-text',
                'section'    => 'zef_content_our-portfolio',
                'type'       => 'textarea'
            )
        )
    );



//*   add customizer-section     "some-benefits"
    $wp_customize->add_section(
        'zef_content_some-benefits',
        array(
            'title'     => 'Some benefits',
            'priority'  => 230
        )
    );

    //**   add customizer-section   label   "General title"

        $wp_customize->add_setting(
            'zef_content_some-benefits__general-title',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_some-benefits__general-title',
                array(
                    'label'      => __( 'General title', 'zef' ),
                    'settings'   => 'zef_content_some-benefits__general-title',
                    'section'    => 'zef_content_some-benefits',
                    'type'       => 'textarea'
                )
            )
        );

    //**   add customizer-section   label   "General text"

        $wp_customize->add_setting(
            'zef_content_some-benefits__general-text',
            array(
                'default'    =>  '',
                'transport'  =>  'postMessage'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'zef_content_some-benefits__general-text',
                array(
                    'label'      => __( 'General text', 'zef' ),
                    'settings'   => 'zef_content_some-benefits__general-text',
                    'section'    => 'zef_content_some-benefits',
                    'type'       => 'textarea'
                )
            )
        );



//*   add customizer-section     "Dream team"
    $wp_customize->add_section(
        'zef_content_dream-team',
        array(
            'title'     => 'Dream team',
            'priority'  => 240
        )
    );

        //**   add customizer-section   label   "General title"
            $wp_customize->add_setting(
                'zef_content_dream-team__general-title',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_dream-team__general-title',
                    array(
                        'label'      => __( 'General title', 'zef' ),
                        'settings'   => 'zef_content_dream-team__general-title',
                        'section'    => 'zef_content_dream-team',
                        'type'       => 'textarea'
                    )
                )
            );


        //**   add customizer-section   label   "General text"
            $wp_customize->add_setting(
                'zef_content_dream-team__general-text',
                array(
                    'default'    =>  '',
                    'transport'  =>  'postMessage'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
                    'zef_content_dream-team__general-text',
                    array(
                        'label'      => __( 'General text', 'zef' ),
                        'settings'   => 'zef_content_dream-team__general-text',
                        'section'    => 'zef_content_dream-team',
                        'type'       => 'textarea'
                    )
                )
            );

}
add_action( 'customize_register', 'zef_register_theme_customizer' );

function zef_customizer_css() {
    ?>
    <style type="text/css">
        a { color: <?php echo get_theme_mod( 'zef_link_color' ); ?>; }

        <?php if( false === get_theme_mod( 'zef_display_header' ) ) { ?>
        #header { display: none; }
        <?php } // end if ?>

    </style>
    <?php
}
add_action( 'wp_head', 'zef_customizer_css' );


//*******************************************