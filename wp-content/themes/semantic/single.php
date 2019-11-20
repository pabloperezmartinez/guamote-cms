<?php get_header(); ?>

<div class="ui container">
	<div class="ui segment" style="min-height: 700px; margin-top: 2vh;">
	<?php while ( have_posts() ) : the_post();?>
		<h2 class="ui header">
			<i class="huge music icon"></i>
		  <div class="content">
		    <?php echo get_post_meta( $product->get_id(), 'artist_name', true ); ?> - <?php the_title(); ?>
		    <div class="sub header"><?php echo get_post_meta( $product->get_id(), 'label_name', true ); ?></div>
		  </div>
		</h2>
		<?php the_content(); ?>
	<?php endwhile;?>
	</div>
</div>
<?php get_footer(); ?>
