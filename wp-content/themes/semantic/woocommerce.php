<?php
$args = array(
		'numberposts' => 3,
		'orderby' => 'date',
		'order' => 'DESC',
		'category_name' => 'slider',
);
$slider = get_posts( $args );

get_header();
?>
  <div class="ui container">
    <div class="ui segment">
      <?php woocommerce_content(); ?>
    </div>
  </div>
<?php get_footer();?>
