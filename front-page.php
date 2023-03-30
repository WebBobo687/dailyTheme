<!-- Récupère le header -->
<?php get_header() ?>

<!-- tant qu'il y a la page, affiche le contenu -->
<?php while(have_posts()): the_post() ?>
    <?php the_content() ?>
<?php endwhile ?>

<!-- récupère le footer -->
<?php get_footer() ?>