<?php
add_theme_support('post-thumbnails');

register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="side-title">',
	'after_title' => '</h2>',
));
