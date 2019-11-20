<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="icon"
      type="image/png"
      href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">


	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/semantic.css" type="text/css" media="screen" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/css/semantic.js"></script>
	<script type="text/javascript">var site_url= "<?php echo get_site_url(); ?>"</script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/functions.js"/>
   <?php if(is_single()||is_page()):?>
    	<meta property="og:title" content="<?php echo the_title(); ?>"/>
	    <title><?php echo the_title(); ?></title>
	   	<meta property="og:description" content="<?php echo implode(' ', array_slice(explode(' ', strip_tags(apply_filters('the_content', get_post_field('post_content', $id)))), 0, 60));?>"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
	    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
	    <meta name="twitter:card" content="summary" />
	    <meta name="twitter:site" content="@ccjpv" />
	    <meta name="twitter:title" content="<?php echo the_title(); ?>" />
	    <meta name="twitter:text:description" content="<?php echo implode(' ', array_slice(explode(' ', strip_tags(apply_filters('the_content', get_post_field('post_content', $id)))), 0, 60));?>" />
	    <?php if(has_post_thumbnail($post->ID)):?>
			  <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>"/>
			 	<meta name="twitter:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>" />
	 		<?php else:?>
			 	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/logo-redes.jpg"/>
			 	<meta name="twitter:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/logo-redes.jpg" />
 			<?php endif;?>
 		<?php elseif(is_front_page()) :?>
			<title><?php bloginfo('name'); ?></title>
			<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
      <meta property="og:description" content="La Venganza del Análogo"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:url" content="<?php echo site_url(); ?>"/>
	    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
	    <meta name="twitter:card" content="summary" />
	    <meta name="twitter:site" content="@ccjpv" />
	    <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
	    <meta name="twitter:text:description" content="La Venganza del Análogo" />
      <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/logo-redes.jpg"/>
		 	<meta name="twitter:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/logo-redes.jpg" />

		<?php else :?>
			<title><?php bloginfo('name'); ?></title>
			<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
      <meta property="og:description" content="La Venganza del Análogo"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
	    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
	    <meta name="twitter:card" content="summary" />
	    <meta name="twitter:site" content="@ccjpv" />
	    <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
	    <meta name="twitter:text:description" content="La Venganza del Análogo" />
      <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/logo-redes.jpg"/>
		 	<meta name="twitter:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/logo-redes.jpg" />
    <?php endif;

 wp_head();
 remove_action('wp_head', 'rel_canonical');

 $args = array(
 		'numberposts' => 3,
 		'orderby' => 'date',
 		'order' => 'DESC',
 		'category_name' => 'slider',
 );
 $slider = get_posts( $args );
 ?>
</head>

<body>
	<header>
		<div class="ui inverted segment" style="border-radius: 0px; margin:0px;">
			<br>
			<div class="ui container">

						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_analogo_header.png" class="ui medium centered image"><br>

			</div>
		</div>
		<div class="ui inverted segment" style="border-radius: 0px; padding: 4px; margin-bottom:0vh; margin-top:0px;">
			<nav class="ui container">
				<?php
				$items = wp_get_nav_menu_items ('Main Menu');
				$item_number_array = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten']; ?>
				<div class="ui top attached <?php echo $item_number_array[count($items)]; ?> inverted menu">
					<!-- ITEMS -->

					<?php
					foreach ($items as $item): ?>
						<?php if ($item->menu_item_parent == 0){?>
							<a class="item" href="<?php echo $item->url?>" id="menu<?php echo $item->ID;?>"><?php echo $item->title?></a>
						<?php }?>
					<?php endforeach;?>
						<div class="right menu">
							<a class="item" href="<?php echo wc_get_cart_url(); ?>" title="Ver carrito">
								<i class="cart large icon"></i>
								<?php
									$cart_item_number = WC()->cart->get_cart_contents_count();
									if ($cart_item_number):
								?>
									<div class="floating ui red label"><?php echo $cart_item_number ?></div>
								<?php endif; ?>
							</a>
							<div class="item">
								<div class="ui action input">
									<input id="search_input" name="s" type="text" placeholder="Buscar..." data-content="Ingresa lo que quieres encontrar en nuestra tienda">
									<button id="search_button" class="ui blue icon button" type="submit">
										<i class="search icon"></i>
									</button>
								</div>
							</div>
						</div>
				</div>
			</nav>
		</div>


		<!-- SUBITEMS -->

		<?php
		$contador=0;
		$padre=0;
		foreach ($items as $item):
			if ($item->menu_item_parent != 0){?>

				<?php if ($item->menu_item_parent != $padre){?>
				<div id="submenu<?php echo $item->menu_item_parent; ?>" class="ui basic popup" style="z-index: 10; padding:0px; margin: 4px; border:none">
					<div class="ui vertical menu">
						<a href="<?php echo $item->url?>" class="item" style="color: black;"><?php echo $item->title?></a>
					</div>
					<?php $padre = $item->menu_item_parent;?>
				</div>

				<script>
				$('#menu<?php echo $item->menu_item_parent; ?>').append('<i class="dropdown icon"></i>')
				$('#menu<?php echo $item->menu_item_parent; ?>').after($('#submenu<?php echo $item->menu_item_parent; ?>'));

						$('#menu<?php echo $item->menu_item_parent; ?>')
						  .popup({
						    inline   : true,
						    hoverable: true,
						    position : 'bottom left',
						    delay: {
						      show: 150,
						      hide: 300
						    }
						  })
						;

				</script>
			<?php }else{?>

				<script>
					$('#submenu<?php echo $item->menu_item_parent; ?> .menu').append('<a class="item" style="color: black;" href="<?php echo $item->url?>"><?php echo $item->title?></a>');
				</script>

			<?php }
			}
		endforeach ?>
	</header>
	<?php if (is_front_page()):?>
	<div id="slider" style = "overflow: hidden;">
		<?php foreach ($slider as $post):?>
			<div class = "ui fluid image carousel" style = "display: none;">
				<div class="ui inverted bottom fixed segment" style = "position: absolute;
					bottom: 10px; right: 10px; opacity: 0.8; border-radius: 0px;">
					<h3 class="ui red dividing header"><?php echo $post->post_title;?></h3>
					<div ><?php echo $post->post_content?></div>
				</div>
				<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];?>"/>
			</div>
		<?php endforeach;?>
	</div><br>
<?php endif;?>
