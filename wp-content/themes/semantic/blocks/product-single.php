<?php
/**
 * Single product template
 */
?>
    <script>
        function displayToast(url) {
            $('body')
                .toast({
                    title: 'Genial!!!',
                    message: 'Estamos a&ntilde;adiendo tu compra al carrito',
                    class: 'info',
                    className: {
                        toast: 'ui message'
                    },
                    onHide: window.location.href = url
                })
            ;
        }
    </script>
<?php while (have_posts()) :
    the_post();
    global $product;
    $meta_artist_name = get_post_meta(get_the_ID(), "artist_name", true);
    $meta_label_name = get_post_meta(get_the_ID(), "label_name", true);
    ?>
    <div>
        <h2 class="ui orange dividing header">
            <div class="content">
                <?php if ($meta_artist_name != null) echo $meta_artist_name ?> - <?php the_title(); ?>
                <?php if ($meta_label_name != null): ?>
                    <div class="sub header"><i class="music icon"></i><?php echo $meta_label_name ?></div>
                <?php endif; ?>
            </div>
        </h2>
        <div class="ui medium left floated image">
            <?php if (get_the_post_thumbnail_url() != null || get_the_post_thumbnail_url() != ''): ?>
                <img alt="<?php the_title() ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"
                     class="ui fluid image">
            <?php else: ?>
                <img alt="<?php the_title() ?>"
                     src="<?php bloginfo('stylesheet_directory'); ?>/img/not-available-img.png"
                     class="ui fluid image">
            <?php endif; ?>
        </div>
        <a class="ui right floated blue button large text"
           onclick='displayToast("<?php echo the_permalink(); ?>?add-to-cart=<?php echo get_the_ID(); ?>")'>
            <i class="cart icon"></i> <?php echo $product->get_price_html(); ?>
        </a>
        <h3 class="ui blue header">Descripci&oacute;n</h3>
        <p>
            <span class="ui blue text"><strong>Ancho: </strong></span><?php echo $product->get_height() . get_option('woocommerce_dimension_unit'); ?>
            &nbsp;&nbsp;&nbsp;
            <span class="ui blue text"><strong>Alto: </strong></span><?php echo $product->get_length() . get_option('woocommerce_dimension_unit'); ?>
            &nbsp;&nbsp;&nbsp;
            <span class="ui blue text"><strong>Espesor: </strong></span><?php echo $product->get_width() . get_option('woocommerce_dimension_unit'); ?>
            &nbsp;&nbsp;&nbsp;
            <span class="ui blue text"><strong>Peso: </strong></span><?php echo $product->get_weight() . get_option('woocommerce_weight_unit'); ?>
        </p>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>