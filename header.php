<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="site-branding">
			<?php if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
			if ( is_front_page() && is_home() ) {
				?><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1><?php
			} else {
				?><p class="site-title"><?php bloginfo( 'name' ); ?></p><?php
			}
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) {
				?><p class="site-description"><?php echo $description; ?></p><?php
			}
		}
		</div>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
			) );
			?>
		</nav>
		<div class="woocommerce-cart">
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="View your shopping cart">
					<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
				</a>
			<?php } ?>
		</div>
	</header>
	<?php wp_footer(); ?>
</body>
</html>