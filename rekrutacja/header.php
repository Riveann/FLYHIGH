<?php
/**
 * The header.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
		<div class="page-bg">
			<?php get_template_part( 'template-parts/header/site-branding' ); ?>
			<?php get_template_part( 'template-parts/header/site-nav' ); ?>
			<div class="container">
				<div class="banner"><?php echo !empty(get_field('banner_description')) ? the_field('banner_description') : '<h2>'.get_the_title().'<h2>'; ?></div>
			</div>
		</div>
	</header>

	
