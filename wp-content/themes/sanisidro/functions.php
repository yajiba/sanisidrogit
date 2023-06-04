<?php
/**
 * sanisidro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sanisidro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sanisidro_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sanisidro, use a find and replace
		* to change 'sanisidro' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sanisidro', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'sanisidro' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sanisidro_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'sanisidro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sanisidro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sanisidro_content_width', 640 );
}
add_action( 'after_setup_theme', 'sanisidro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sanisidro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sanisidro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sanisidro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sanisidro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sanisidro_scripts() {
	wp_enqueue_style( 'sanisidro-style', get_stylesheet_uri(), array());
	wp_style_add_data( 'sanisidro-style', 'rtl', 'replace' );
	wp_enqueue_style( 'sanisidro-boostrap-local', get_template_directory_uri() .'/bootstrap/css/bootstrap.min.css');
   	wp_enqueue_style( 'sanisidro-boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'sanisidro-fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
	
	wp_enqueue_script( 'sanisidro-jquery', 'https://code.jquery.com/jquery-3.7.0.min.js');
	wp_enqueue_script( 'sanisidro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sanisidro-bootstrap-local', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script( 'sanisidro-boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js');
	wp_enqueue_script( 'sanisidro-custom', get_template_directory_uri() . '/js/custom.js');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sanisidro_scripts' );

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

add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

add_shortcode('latest_post', 'latest_post');
function latest_post($atts) { 
	 ob_start();
	 extract(
		shortcode_atts(
		  array(
			'type' => '',
		),
	  $atts)
	);
	 ?>
		<div class="content-holder">
			<div class="col-md-5 featured">
				<?php
					$query = new WP_Query(
						array(
							'post_type' => $type,
							'post_status' => 'publish',
							"numberposts" => 1,
							'post_per_page' => 1,
							'order'           => 'DESC',
						)
					);
							
					if($query->post_count > 0){
							
					foreach($query->posts as  $featured) {
						$img_url = get_the_post_thumbnail_url($featured->ID,'thumbnail');
						$description = substr(wp_strip_all_tags($featured->post_content), 0, 250).'...';
						$permalink = get_permalink($featured->ID);
					?>
						<div class="image-holder">
							<img src="<?php echo $img_url; ?>">
						</div>
						<h3 class="post-title"><?php  echo $featured->post_title ;?></h3>
						<p class="post-meta"><?php 	echo  date('F j, Y', strtotime($featured->post_date));?></p>
						<p class="excerpt"><?php echo $description; ?></p>
						<a href="<?php echo $permalink; ?>" class="btn btn-primary view-all">Read More</a>
						<?php break; } 
						
						}
				?>
			</div>
							<div class="col-md-7 related">
							<?php
								$query = new WP_Query(
									array(
										'post_type' => $type,
										'post_status' => 'publish',
										'post_per_page' => 5,
										'order'           => 'DESC',
									)
								);
										
									if($query->post_count > 0){
											$count = 1;
									foreach($query->posts as  $related) {
										$related_img = get_the_post_thumbnail_url($related->ID,'thumbnail');
										$description = substr(wp_strip_all_tags($related->post_content), 0, 250).'...';
										$permalink = get_permalink($related->ID);
										if($count != 1){
									?>
									<div class="related-content <?php if($query->post_count > 4) { echo 'more-than-4';}else { echo 'less-than-4'; }?>" >
										<img src="<?php echo $related_img; ?>">
										<div class="overlay"></div>
										<h3 class="post-title"><?php  echo $related->post_title ;?></h3>
									</div>
									
								<?php }
								$count++;
									}
									} ?>
							</div>
						</div>
		<?php
      
   
	 
   return do_shortcode(ob_get_clean());
}