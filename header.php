<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_enqueue_script('jquery.js', get_bloginfo('template_url').'/assets/javascripts/jquery.js'); ?>
	<?php wp_enqueue_script('slider.js', get_bloginfo('template_url').'/assets/javascripts/slider.min.js'); ?>
	<?php wp_enqueue_script('main.js', get_bloginfo('template_url').'/assets/javascripts/main.js'); ?>
	<?php wp_enqueue_script('functions', get_bloginfo('template_url').'/js/functions.js'); ?>
	<script>
	</script>
</head>
<body>

<header>
  <h1>header</h1>
</header>