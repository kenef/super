<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />
	<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<header class="header">   
	<nav class="top-bar" data-topbar role="navigation">
	 
	</nav>
</header>
<body <?php body_class(); ?>>