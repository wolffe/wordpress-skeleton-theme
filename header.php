<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="canonical" href="<?php echo get_permalink(); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php wp_head(); ?>
</head>
<body>

<div id="content">
    <div id="header">
        <a href="<?php echo home_url('/'); ?>"><?php echo get_bloginfo('name'); ?></a>
    </div>

    <nav>
        <ul>
            <li><a href="#1">Item #1</a></li>
            <li><a href="#2">Item #2</a></li>
            <li><a href="#3">Item #3</a></li>
        </ul>
    </nav>
