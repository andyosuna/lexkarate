<?php
add_theme_support(
	'post-formats',
	array('image','video','audio','quote','gallery')
);
add_theme_support('post-thumbnails'); //Featured Image
add_theme_support('custom-background');
add_theme_support('automatic-feed-links');

/** Menu System Support
  * Adds menu areas to the theme
  * Since ver 1.0
  * Note: Menus are displayed on header.php
  **/
function lex_menus(){
	register_nav_menus(array(
		'main_nav'=>'Global Navigation'
	));
}
add_action('init','lex_menus');