<?php
/**
 * Customizer section options.
 *
 * @package editor_news
 *
 */

function editor_news_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
	// Footer copyright
		
		$wp_customize->add_setting( 'newsexo_footer_copright_text',
		array(
			'sanitize_callback' =>  'editor_news_sanitize_text',
			'default' => __('Copyright &copy; 2025 | Powered by <a href="//wordpress.org/">WordPress</a>', 'editor-news'),
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'newsexo_footer_copright_text',
		array(
			'label'   => esc_html__( 'Copyright Text', 'editor-news' ),
			'section' => 'newsexo_footer_copyright',
			'priority'        => 10,
			'type' => 'textarea',
		));
}
add_action( 'customize_register', 'editor_news_customizer_theme_settings' );

function editor_news_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}