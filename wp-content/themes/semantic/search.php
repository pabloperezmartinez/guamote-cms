<?php
get_header();
?>

<div class="ui container">
	<div class="segment" style="margin-top: 2vh">
		<div class="ui link cards">
			<?php
			// Start the Loop.
			if (have_posts ()):
			while ( have_posts() ) : the_post();?>
		 		<a href="<?php echo the_permalink()?>" class="card">
	 				<?php if ( get_post_thumbnail_id()!=null || get_post_thumbnail_id()!=''):?>
						<div class="image">
	 						<img alt="<?php the_title()?>" src="<?php the_post_thumbnail_url();?>" class="ui fluid image">
						</div>
	 				<?php else:?>
	 					&nbsp;
	 				<?php endif;?>
					<div class="content">
						<div class="header"><i class="music icon"></i> <?php the_title()?></div>
						<div class="meta">
			        <?php echo get_post_field('artist_name', the_ID()); ?>
			      </div>
						<div class="description">
							<?php echo wp_trim_words( wp_strip_all_tags(get_post_field('post_content', the_ID())) , 20 , " | Ver m&aacute;s...") ?>
						</div>
						<div class="extra content">
				      <span>
				        <?php echo get_post_field('label_name', the_ID()); ?>
				      </span>
				    </div>
					</div>
		 		</a>
			<?php endwhile;
			else:?>
				<div class="segment" style="min-height: 400px; display: flex; align-items: center;">
					<p><i class="large red frown icon"></i>Lo sentimos, no hay resultados para: <strong><?php echo $_GET['s']; ?></strong></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php
get_footer();
?>



<a href="<?php echo the_permalink()?>">
