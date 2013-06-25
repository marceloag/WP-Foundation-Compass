<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Meta Information -->
	<meta name="google-site-verification" content="">
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2013. All Rights Reserved.">
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">

<!-- Stylesheets -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Javascripts for IE Support -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.orbit.js"></script>

	 <!--
	 	<script src="js/foundation/foundation.alerts.js"></script>
		<script src="js/foundation/foundation.clearing.js"></script>
		<script src="js/foundation/foundation.cookie.js"></script>
		<script src="js/foundation/foundation.dropdown.js"></script>
		<script src="js/foundation/foundation.forms.js"></script>
		<script src="js/foundation/foundation.joyride.js"></script>
		<script src="js/foundation/foundation.magellan.js"></script>
		<script src="js/foundation/foundation.orbit.js"></script>
		<script src="js/foundation/foundation.placeholder.js"></script>
		<script src="js/foundation/foundation.reveal.js"></script>
		<script src="js/foundation/foundation.section.js"></script>
		<script src="js/foundation/foundation.tooltips.js"></script>
		<script src="js/foundation/foundation.topbar.js"></script>
	-->

<!-- Facebook Image -->
	<link rel="image_src" href="" />
<!-- Facebook Image -->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body>
<header class="panel">
	<div class="row">
		<div class="large-4 columns">
			<!-- Titulo del Blog -->
			<h2><?php echo bloginfo('name'); ?></h2>
		</div>
		<div class="large-8 columns">
			<!-- Custom Menu -->
			<?php wp_nav_menu( array('menu' => 'menu' )); ?>
		</div>
	</div>
</header>
		

