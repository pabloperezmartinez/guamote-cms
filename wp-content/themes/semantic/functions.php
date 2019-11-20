<?php
function register_menu(){
	register_nav_menu('main-nav',__( 'Top Main Navigation' ));
}

add_action( 'init', 'register_menu');

add_theme_support( 'post-thumbnails' );


function accordion_shortcode( $attr, $content = null ) {
	return '<div class="ui fluid styled accordion">' . do_shortcode($content) . '</div><script>$(".ui.accordion").accordion("open",1);</script>';
}
add_shortcode('accordion', 'accordion_shortcode');

function title_shortcode( $attr, $content = null ) {
	return '<div class="title"><i class="dropdown icon"></i>' . $content . '</div>';
}
add_shortcode('title', 'title_shortcode');

function content_shortcode( $attr, $content = null ) {
	return '<div class="content"><p>' . $content . '</p></div>';
}
add_shortcode('content', 'content_shortcode');

?>
