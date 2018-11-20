<?php
/**
 * Template Name: Shop page
 *
 */

get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content shop-content" role="main">
        <?php
        if (is_front_page()) { echo '<!-- front page -->'; }

        if ( wpsc_cart_total() > 0 && is_front_page() ) { ?>
        <div class="shopping-cart-sum">
            Shopping cart: <?php echo wpsc_cart_total(); ?>
        </div>
        <?php } ?>

        <?php /* The loop */ ?>
        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php
                    wp_link_pages(
                        array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
            </article><!-- #post -->

            <?php comments_template(); ?>
        <?php endwhile; ?>

    </div><!-- #content -->
</div><!-- #primary -->
<script>
    jQuery( document ).ready(function() {
        console.log( "ready!" );
        jQuery("img").each(function() {
            if (jQuery(this).attr('src').indexOf("category_images") >= 0) {
                jQuery(this).attr('src', jQuery(this).attr('src').replace(/-\d+[Xx]\d+/g, ""));
            }
        });
    });
</script>

<?php
if ( is_front_page() ) {
    get_sidebar('shop');
} else {
    get_sidebar();
}
?>
<?php get_footer(); ?>
