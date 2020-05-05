<?php
get_header();
?>
<div class="ui container">
	<div class="ui segment" style="margin-top: 2vh; min-height: 500px">

		<?php
		/**
		 * Single view
		 */
		if (is_single()): ?>
			<script>
				function displayToast(url) {
					$('body')
						.toast({
							title: 'Genial!!!',
							message: 'Estamos a&ntilde;adiendo tu compra al carrito',
							class : 'info',
							className: {
									toast: 'ui message'
							},
							onHide: window.location.href = url
						})
					;
				}
			</script>
			<?php while ( have_posts() ) : the_post();
				$meta_artist_name = get_post_meta(get_the_ID(), "artist_name", true);
				$meta_label_name = get_post_meta(get_the_ID(), "label_name", true);
			?>
				<div>
					<h2 class="ui orange dividing header">
						<div class="content">
							<?php if ($meta_artist_name!=null) echo $meta_artist_name?> - <?php the_title(); ?>
							<?php if ($meta_label_name!=null): ?>
								<div class="sub header"><i class="music icon"></i><?php echo $meta_label_name ?></div>
							<?php endif; ?>
						</div>
					</h2>
					<div class="ui medium left floated image">
						<?php if (get_the_post_thumbnail_url()!=null || get_the_post_thumbnail_url()!=''):?>
							<img alt="<?php the_title()?>" src="<?php echo get_the_post_thumbnail_url();?>" class="ui fluid image">
						<?php else: ?>
							<img alt="<?php the_title()?>" src="<?php bloginfo('stylesheet_directory'); ?>/img/not-available-img.png" class="ui fluid image">
						<?php endif; ?>
					</div>

					<a class="ui right floated blue button large text" onclick='displayToast("<?php echo the_permalink(); ?>?add-to-cart=<?php echo get_the_ID(); ?>")'>
						<i class="cart icon"></i> <?php echo $product->get_price_html(); ?>
					</a>
					<h3 class="ui blue header">Descripci&oacute;n</h3>
					<p>
						<span class="ui blue text"><strong>Ancho: </strong></span><?php echo $product->get_height() . get_option( 'woocommerce_dimension_unit' ); ?>&nbsp;&nbsp;&nbsp;
						<span class="ui blue text"><strong>Alto: </strong></span><?php echo $product->get_length() . get_option( 'woocommerce_dimension_unit' ); ?>&nbsp;&nbsp;&nbsp;
						<span class="ui blue text"><strong>Espesor: </strong></span><?php echo $product->get_width() . get_option( 'woocommerce_dimension_unit' ); ?>&nbsp;&nbsp;&nbsp;
						<span class="ui blue text"><strong>Peso: </strong></span><?php echo $product->get_weight() . get_option( 'woocommerce_weight_unit' ); ?>
					</p>
				<?php the_content(); ?>
				</div>
			<?php endwhile;?>
		<?php
		/**
		 * Products list in category
		 */
		elseif(is_archive()): ?>
			<h1 class= "ui orange dividing header"><?php echo single_cat_title(); ?></h1>
			<?php if (have_posts() ) :?>
			<ul class="ui link cards">
				<?php
				while ( have_posts() ) : the_post();
					$meta_artist_name = get_post_meta(get_the_ID(), "artist_name", true);
					$meta_label_name = get_post_meta(get_the_ID(), "label_name", true);
				?>
							<a href="<?php echo the_permalink()?>" class="card">
								<div class="image">
									<?php if (get_the_post_thumbnail_url()!=null || get_the_post_thumbnail_url()!=''):?>
										<img alt="<?php the_title()?>" src="<?php echo get_the_post_thumbnail_url();?>" class="ui fluid image">
									<?php else: ?>
										<img alt="<?php the_title()?>" src="<?php bloginfo('stylesheet_directory'); ?>/img/not-available-img.png" class="ui fluid image">
									<?php endif; ?>
								</div>
								<div class="content">
									<div class="ui blue right floated tag label">
										<?php echo $product->get_price_html(); ?>
									</div>
									<div class="header">
										<?php the_title()?></div>
									<div class="description">
										<?php the_excerpt()?>
									</div>
								</div>
								<?php if ($meta_artist_name != null): ?>
									<div class="extra content">
										<span class="right floated">
											<?php echo $meta_label_name ?>
										</span>
										<span>
											<i class="microphone icon"></i>
											<?php echo $meta_artist_name ?>
										</span>
									</div>
							<?php endif ?>
							</a>
						<?php endwhile;

						$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
						$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
						$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
						$format  = isset( $format ) ? $format : '';

						if ( $total > 1 ): ?>
						<nav class="woocommerce-pagination">
							<?php
							echo paginate_links(
								apply_filters(
									'woocommerce_pagination_args',
									array( // WPCS: XSS ok.
										'base'      => $base,
										'format'    => $format,
										'add_args'  => false,
										'current'   => max( 1, $current ),
										'total'     => $total,
										'prev_text' => '&larr;',
										'next_text' => '&rarr;',
										'type'      => 'list',
										'end_size'  => 3,
										'mid_size'  => 3,
									)
								)
							);
					 	?>
						</nav>
						<?php endif; ?>
			</ul>
				<?php else :
					wp_reset_postdata();?>
					<div class="ui container">
						<div class="ui placeholder segment">
						  <div class="ui icon header">
						    <i class="blue frown icon"></i>
						    No se encuentran productos
						  </div>
						  <div class="inline">
						    <a class="ui primary button" href="<?php echo get_site_url() ?>">Regresar a inicio</a>
						  </div>
						</div>
					</div>
				<?php endif;?>
		<?php else: ?>
			<?php woocommerce_content(); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
