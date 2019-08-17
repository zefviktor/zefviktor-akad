<?php
/**
 * akad functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package akad
 */

if ( ! function_exists( 'akad_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function akad_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on akad, use a find and replace
		 * to change 'akad' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'akad', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'akad_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'akad_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function akad_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'akad_content_width', 640 );
}
add_action( 'after_setup_theme', 'akad_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function akad_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'akad' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'akad' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'akad_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// *** Add function ***

// *** Add show admin bar ***
    add_filter('show_admin_bar', '__return_false');


// *** Add style & script ***

    define('Q_THEME_ROOT', get_template_directory_uri());
    define('Q_CSS_DIR', Q_THEME_ROOT . '/css');
    define('Q_JS_DIR', Q_THEME_ROOT . '/js');
    define('Q_IMG_DIR', Q_THEME_ROOT . '/img');
    define('Q_SLICK_DIR', Q_THEME_ROOT . '/slick');

    add_action( 'wp_enqueue_scripts', function(){
        wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array());
        wp_enqueue_style( 'awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
        wp_enqueue_style( 'style', get_stylesheet_uri(), array('reset'));
        wp_enqueue_style( 'reset', Q_CSS_DIR . '/reset.min.css');
        wp_enqueue_style( 'index', Q_CSS_DIR . '/index.min.css', array('reset'));
        wp_enqueue_style( 'slick', Q_SLICK_DIR . '/slick.css', array('reset'));
        wp_enqueue_style( 'slick-theme', Q_SLICK_DIR . '/slick-theme.css', array('reset'));

        wp_enqueue_script( 'customize', Q_JS_DIR . '/customizer.min.js', array('jquery'));
        wp_enqueue_script( 'navigation', Q_JS_DIR . '/navigation.min.js', array('jquery'));
        wp_enqueue_script( 'skip-link-focus-fix', Q_JS_DIR . '/skip-link-focus-fix.min.js', array('jquery'));





        wp_deregister_script('jquery');
        wp_enqueue_script( 'jquery', Q_JS_DIR . '/jquery-3.1.1.min.js', array(), NULL, 'in_footer');
        wp_enqueue_script( 'slick', Q_SLICK_DIR. '/slick.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'imagesloaded', Q_JS_DIR . '/imagesloaded.pkgd.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'masonry-js', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'functions', Q_JS_DIR . '/functions.min.js', array('jquery'), NULL, 'in_footer');


    });




// *** Add menus ***

    add_theme_support('menu');
    function create_post_type() {
        register_post_type( 'acme_product',
            array(
                'labels' => array(
                    'name' => __( 'Products' ),
                    'singular_name' => __( 'Product' )
                ),
                'public' => true,
                'has_archive' => true,
            )
        );
    }

    // *** Add widgets ***
require_once('widgets/class-wp-widget-archives.php');



    add_action('widgets_init', 'register_widgets');
    function register_widgets($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id'  => 'sidebar'
        ));
    }

    // *** register widgets ***
    add_action('widgets_init', 'register_custom_widget');
    function register_custom_widget() {
        register_widget('WP_Widget_Archives_Custom');
    }


//
    add_action( 'init', function(){
        add_theme_support('post-thumbnails');

        //posts type - "logo"

        register_post_type('logo', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'logo',
                'singular_name'      => 'logo',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'logo',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-cloud',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        //posts type - "we-are-in-social"

        register_post_type('we-are-in-social', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'we-are-in-social',
                'singular_name'      => 'we-are-in-social',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'We are in social',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-cloud',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        //posts type - "portfolios"

        register_post_type('portfolios', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'portfolios',
                'singular_name'      => 'portfolios',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'Portfolios',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-format-image',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        //posts type - "why choose us"

        register_post_type('why-choose-us', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'why-choose-us',
                'singular_name'      => 'why-choose-us',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'Why choose us',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-thumbs-up',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );


        //posts type - "about us"

        register_post_type('about-us', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'about-us',
                'singular_name'      => 'about-us',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'About us',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-groups',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );


        //posts type - "some benefits"

        register_post_type('some-benefits', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'some-benefits',
                'singular_name'      => 'some-benefits',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'Some benefits',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-smiley',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        //posts type - "the-dream-team"

        register_post_type('the-dream-team', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'the-dream-team',
                'singular_name'      => 'the-dream-team',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'The dream team',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-cloud',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        //posts type - "clients"

        register_post_type('client', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'client',
                'singular_name'      => 'client',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'Clients',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-cloud',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        //posts type - "testimonials"

        register_post_type('testimonial', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'testimonials',
                'singular_name'      => 'testimonials',
                'add_new'            => 'Добавить -',
                'add_new_item'       => 'Добавление -',
                'edit_item'          => 'Редактирование -',
                'new_item'           => 'Новое -',
                'view_item'          => 'Смотреть -',
                'search_items'       => 'Искать -',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name'          => 'Testimonials',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-cloud',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        register_post_type('imageHero', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'imageHero',
                'singular_name'      => 'imageHero',
                'add_new'            => 'Добавить imageHero',
                'add_new_item'       => 'Добавление imageHero',
                'edit_item'          => 'Редактирование imageHero',
                'new_item'           => 'Новое imageHero',
                'view_item'          => 'Смотреть imageHero',
                'search_items'       => 'Искать imageHero',
                'not_found'          => 'Не найдено imageHero',
                'not_found_in_trash' => 'Не найдено в корзине imageHero',
                'menu_name'          => 'imageHero',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-format-image',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );

        register_post_type('imageWhy', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'imageWhy',
                'singular_name'      => 'imageWhy',
                'add_new'            => 'Добавить imageWhy',
                'add_new_item'       => 'Добавление imageWhy',
                'edit_item'          => 'Редактирование imageWhy',
                'new_item'           => 'Новое imageWhy',
                'view_item'          => 'Смотреть imageWhy',
                'search_items'       => 'Искать imageWhy',
                'not_found'          => 'Не найдено imageWhy',
                'not_found_in_trash' => 'Не найдено в корзине imageWhy',
                'menu_name'          => 'imageWhy',
            ),
            'public'              => false,
            'show_ui'             => true, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'menu_icon'           => 'dashicons-format-image',
            'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        ) );



    });

    function getLogo(){
        $args = array(
            'numberposts' => 1,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'logo',
        );

        $logos = [];

        foreach(get_posts($args) as $post){
            $logo = get_fields($post->ID);
            $logo['name'] = $post->post_title;
            $logos[] = $logo;
        }
        return $logos;
    }


    function getWeAreInSocial(){
        $args = array(
            'numberposts' => 8,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'we-are-in-social',
        );

        $weAreInSocials = [];

        foreach(get_posts($args) as $post){
            $weAreInSocial = get_fields($post->ID);
            $weAreInSocial['name'] = $post->post_title;
            $weAreInSocial['category'] = $post->post_category;
            $weAreInSocial['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $weAreInSocials[] = $weAreInSocial;
        }
        return $weAreInSocials;
    }


    function getWhyChooseUs(){
        $args = array(
            'numberposts' => 4,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'why-choose-us',
        );

        $whyChooseUse = [];

        foreach(get_posts($args) as $post){
            $whyChooseUs = get_fields($post->ID);
            $whyChooseUs['name'] = $post->post_title;
//            $whyChooseUs['category'] = $post->post_category;
            $whyChooseUs['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $whyChooseUse[] = $whyChooseUs;
        }
        return $whyChooseUse;
    }

    function getPortfolios(){
        $args = array(
            'numberposts' => 10,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'portfolios',
        );

        $portfolios = [];

        foreach(get_posts($args) as $post){
            $portfolio = get_fields($post->ID);
            $portfolio['name'] = $post->post_title;
            $portfolio['category'] = $post->post_category;
            $portfolio['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $portfolios[] = $portfolio;
        }
        return $portfolios;
    }

    function getAboutUs(){
        $args = array(
            'numberposts' => 2,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'about-us',
        );

        $abouts = [];

        foreach(get_posts($args) as $post){
            $about = get_fields($post->ID);
            $about['name'] = $post->post_title;
            $about['category'] = $post->post_category;
            $about['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $abouts[] = $about;
        }
        return $abouts;
    }


    function getSomeBenefits(){
        $args = array(
            'numberposts' => 6,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'some-benefits',
        );

        $someBenefits = [];

        foreach(get_posts($args) as $post){
            $someBenefit = get_fields($post->ID);
            $someBenefit['name'] = $post->post_title;
            $someBenefit['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $someBenefits[] = $someBenefit;
        }
        return $someBenefits;
    }

    function getTheDreamTeam(){
        $args = array(
            'numberposts' => 8,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'the-dream-team',
        );

        $theDreamTeams = [];

        foreach(get_posts($args) as $post){
            $theDreamTeam = get_fields($post->ID);
            $theDreamTeam['name'] = $post->post_title;
            $theDreamTeam['category'] = $post->post_category;
            $theDreamTeam['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $theDreamTeams[] = $theDreamTeam;
        }
        return $theDreamTeams;
    }

    function getClients(){
        $args = array(
            'numberposts' => 8,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'client',
        );

        $clients = [];

        foreach(get_posts($args) as $post){
            $client = get_fields($post->ID);
            $client['name'] = $post->post_title;
            $client['category'] = $post->post_category;
            $client['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $clients[] = $client;
        }
        return $clients;
    }



    function getTestimonials(){
        $args = array(
            'numberposts' => 3,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'testimonial',
        );

        $testimonials = [];

        foreach(get_posts($args) as $post){
            $testimonial = get_fields($post->ID);
            $testimonial['name'] = $post->post_title;
            $testimonial['category'] = $post->post_category;
            $testimonial['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $testimonials[] = $testimonial;
        }
        return $testimonials;
    }


    function getImageHero(){
        $args = array(
            'numberposts' => 10,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'imageHero',
        );
        $imageHeros = [];

        foreach(get_posts($args) as $post){
            $imageHero = get_fields($post->ID);
            $imageHero['name'] = $post->post_title;
            $imageHero['category'] = $post->post_category;
            $imageHero['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $imageHeros[] = $imageHero;
        }
        return $imageHeros;
    }

    function getImageWhy(){
        $args = array(
            'numberposts' => 10,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'imageWhy',
        );
        $imageWhys = [];

        foreach(get_posts($args) as $post){
            $imageWhy = get_fields($post->ID);
            $imageWhy['name'] = $post->post_title;
            $imageWhy['category'] = $post->post_category;
            $imageWhy['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $imageWhys[] = $imageWhy;
        }
        return $imageWhys;
    }


