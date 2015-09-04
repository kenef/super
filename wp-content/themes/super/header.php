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
	<div class="groovy-title-row">
		<div class="groovy-title">

		</div>
	</div> 
	<div class="dev-specs-row">
		<div class="left">

		</div>
		<div class="middle">

		</div>
		<div class="right">

		</div>
	</div>
	<div class="informer-row">
		<div class="payment-gateway-logo">

		</div>
		<div class="informer">

		</div>
	</div>
</header>
<body <?php body_class(); ?>>