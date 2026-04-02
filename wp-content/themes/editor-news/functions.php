<?php
/**
 * Theme functions and definitions
 *
 * @package Editor News
 */

/**
 * After setup theme hook
 */
function editor_news_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'editor-news', get_stylesheet_directory() . '/languages' );	
	require get_stylesheet_directory() . '/inc/customizer/editor-news-customizer-options.php';
}
add_action( 'after_setup_theme', 'editor_news_theme_setup' );

/**
 * Load assets.
 */

function editor_news_theme_css() {
	wp_enqueue_style( 'editor-news-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('editor-news-child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('editor-news-default-css', get_stylesheet_directory_uri() . "/assets/css/theme-default.css" );
    wp_enqueue_style('editor-news-bootstrap-smartmenus-css', get_stylesheet_directory_uri() . "/assets/css/jquery.smartmenus.bootstrap-4.css" ); 	
}
add_action( 'wp_enqueue_scripts', 'editor_news_theme_css', 99);

/**
 * Fresh site activate
 *
 */
$fresh_site_activate = get_option( 'fresh_editor_news_site_activate' );
if ( (bool) $fresh_site_activate === false ) {
	set_theme_mod( 'newsexo_typography_disabled', true );
	set_theme_mod( 'newsexo_theme_color', 'theme-red' );
	set_theme_mod( 'newsexo_site_style_layout', 'vrsn-five');
	set_theme_mod( 'newsexo_theme_header_background_color', '#013079');
	set_theme_mod( 'newsexo_top_header_bac_color', '#012761');
	set_theme_mod( 'newsexo_top_header_text_color', '#ffffff');
	set_theme_mod( 'newsexo_top_social_icon_color', '#ffffff  ');
	set_theme_mod( 'newsexo_menu_bar_background_color', '#012761' );
	set_theme_mod( 'newsexo_menu_bar_font_color', '#ffffff' );
	set_theme_mod( 'newsexo_menu_bar_active_color', '#d40004' );
	set_theme_mod( 'newsexo_menu_bar_font_active_color', '#ffffff' );
	set_theme_mod( 'newsexo_dropdown_menu_background_color', '#012761' );
	set_theme_mod( 'newsexo_menubar_top_border_color', '#012761' );
	set_theme_mod( 'newsexo_footer_background_color', '#012761' );
	set_theme_mod( 'newsexo_typography_menu_bar_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_dropdown_bar_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_h2_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_h3_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_h4_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_h5_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_h6_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_h7_font_family', 'Alegreya');
	set_theme_mod( 'newsexo_typography_h8_font_family', 'Alegreya');
	
	update_option( 'fresh_editor_news_site_activate', true );
}

/**
 * Custom background
 *
 */
function editor_news_custom_background_setup() {
	add_theme_support( 'custom-background', apply_filters( 'editor_news_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
add_action( 'after_setup_theme', 'editor_news_custom_background_setup' );


if ( ! function_exists( 'editor_news_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see interiorpress_custom_header_setup().
	 */
	function editor_news_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
				?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}

			<?php
			// If the user has set a custom color for the text use that.
			else :
				?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?> !important;
			}

			<?php endif; ?>
		</style>
		<?php
	}
endif;