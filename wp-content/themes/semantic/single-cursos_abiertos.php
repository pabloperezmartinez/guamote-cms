<?php get_header(); ?>

<div class="ui container">
	<div class="ui segment" style="min-height: 700px;">
	<?php while ( have_posts() ) : the_post();?>
		<h3><?php the_title(); ?></h3>
		<?php if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) )!=null){?>
			<br><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>" class="ui fluid image"><br>
		<?php }?>
		<div>
			<strong>Inicia:</strong> <?php echo get_field( "fecha_inicio" );?> 
			| <strong>Termina: </strong><?php echo get_field( "fecha_fin" );?>
			| <strong>Precio: </strong>$<?php echo get_field( "costo" );?> USD.	
		</div>
		<?php the_content(); ?>
	<?php endwhile;?>
	</div>
</div>
<?php get_footer(); ?>