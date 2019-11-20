<?php get_header(); ?>

<div class="ui container">
	<div class="ui segment" style="min-height: 700px;">
	<?php while ( have_posts() ) : the_post();?>
		<h3 class="ui header"><?php the_title(); ?></h3>
		<?php the_content(); ?>
	<?php endwhile;?>
	</div>
</div>
<?php get_footer(); ?>
