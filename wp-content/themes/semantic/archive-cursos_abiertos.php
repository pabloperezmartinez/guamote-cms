<?php
get_header();

?>

<div class="ui container">
	<div class="ui segment">
		<div class="ui four column doubling grid">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();?>
	 		
	 			<div class="column">
	 				<a href="<?php echo the_permalink()?>"><h3 class="ui header"><?php the_title()?></h3></a>
	 				<?php if (the_post_thumbnail_url!=null || the_post_thumbnail_url!=''):?>
	 					<a href="<?php echo the_permalink()?>">
	 						<img alt="<?php the_title()?>" src="<?php the_post_thumbnail_url();?>" class="ui fluid image">
	 					</a>
	 				<?php else:?>
	 					&nbsp;
	 				<?php endif;?>
	 				<?php the_content()?>
	 				<p><strong>Empieza: </strong><?php the_field('fecha_inicio'); ?><br/>
					<strong>Termina: </strong> <?php the_field('fecha_fin'); ?><br>
					<strong>Costo: </strong>$<?php the_field('costo'); ?> USD.
	 			</div>
	 		
		<?php endwhile;?>
		</div>
	</div>
</div>


<?php
get_footer(); 
?>
