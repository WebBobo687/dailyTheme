<?php
/**
 * Template Name: Page avec bannière
 * Template Post Type: page, post
*/
?>
<?php get_header() ?>

<?php if(have_post()) : while (have_posts()) : th_post(); ?>
    <?php the_content() ?>
<?php get_footer() ?>