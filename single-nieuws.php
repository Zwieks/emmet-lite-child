<?php
/**
 * The template for displaying all single posts
    Template Name Posts: Nieuws
 * @package WordPress
 * @subpackage Emmet
 * @since Emmet 1.0
 */
get_header();
?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php endif; ?>
    <div class="header-image-wrapper">
        <div class="header-image <?php if (get_header_image() != '') { ?>with-header-image <?php }?>" <?php if (get_header_image() != '') { ?>style="background-image: url('<?php echo $image[0]; ?>')" <?php } ?>>
            <div class="container">
                <?php while (have_posts()) : the_post(); ?>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="container main-container">
        <date class="date"><?php the_date(); ?></date>

        <?php
            $bron_url = get_post_meta( get_the_ID(), 'URL bron artikel', true );
            $bron_naam = get_post_meta( get_the_ID(), 'Naam bron artikel', true );
        ?>

        <span>Bron:</span><a href="<?php if ( ! empty( $bron_url ) ) {echo $bron_url;} ?>" target="_blank"><?php if ( ! empty( $bron_naam ) ) {echo $bron_naam;} ?></a>
        <div class="row clearfix">
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'single'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>