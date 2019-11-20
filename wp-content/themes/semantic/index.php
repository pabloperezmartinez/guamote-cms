<?php
get_header();

$args = array(
		'numberposts' => 3,
		'orderby' => 'date',
		'order' => 'DESC',
		'category_name' => 'slider',
);
$slider = get_posts( $args );


$args = array(
		'numberposts' => 4,
		'orderby' => 'date',
		'order' => 'DESC',
		'category_name' => 'noticias',
);
$ultimos = get_posts( $args );

$query_args = array(
		'posts_per_page' => 4,
		'post_type' => 'cursos_abiertos',

		'meta_key' => 'fecha_fin', // Check the start date field
		'meta_value' => date("Y/m/d"), // Set today's date (note the similar format)
		'meta_compare' => '>=', // Return the ones greater than today's date
		//'type' => 'NUMERIC,', // Let WordPress know we're working with numbers

		'meta_key'			=> 'fecha_inicio',
		'orderby'			=> 'meta_value_num',
		'order'				=> 'ASC',
);
$cursos_abiertos=query_posts($query_args);
?>
<script type="text/javascript">

$(function(){
    var images = $('.carousel'),
         imgIx = 0;

    (function nextImage(){
        $(images[imgIx++] || images[imgIx = 0, imgIx++]).fadeIn(1000).delay(4000).fadeOut(1000, nextImage);
    })();
});

</script>

	<div class="ui container">
		<div id="slider" style = "overflow: hidden;">
			<?php foreach ($slider as $post):?>
				<div class = "ui fluid image carousel" style = "display: none;">
					<div class="ui inverted bottom fixed segment" style = "position: absolute;
						bottom: 10px; right: 10px; opacity: 0.8; border-radius: 0px; color:#000 !important">
						<h4 style="font-size: 12px; color:#000 !important" class="ui dividing header"><?php echo $post->post_title;?></h4>
						<div style="font-size: 10px;"><?php echo $post->post_content?></div>
					</div>
					<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];?>"/>
				</div>
			<?php endforeach;?>
		</div><br>

		<div class="ui segment">
			<h2 class="ui dividing header">Posts</h2>
			<div class="ui stackable four column grid">
				<?php foreach ($ultimos as $post):?>
					<div class="column">
						<?php if (get_post_thumbnail_id( $post->ID )!=NULL){?>
						<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];?>" class="ui fluid image">
						<?php }?>
						<br><a href="<?php echo get_permalink($post->ID)?>" class="ui blue sub header"><?php echo $post->post_title;?></a>
						<p><?php echo $post->post_excerpt?></p>
					</div>
				<?php endforeach;?>
			</div>
		</div>
			<?php
				$eventos_request = file_get_contents("http://matriculas.ccjpv.com/api/evento/obtenerUltimosEventos");
				$eventos = json_decode($eventos_request);
			?>
	</div>
<?php get_footer(); ?>
