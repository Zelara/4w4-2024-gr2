<?php

/**
 * Template name: Evenement
 *
 */
?>

<?php get_header(); ?>
<main class="site__main">
    <?php
    if (have_posts()) : the_post(); ?>
        <div class="conference__texte">
            <h1><?= get_the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <!-- dans la page tu peux aussi faire: La conférence aura lieu à [acf field = "adresse"] à [acf field="date_et_heure"] -->

        <div class="conference__champs">
            <p>L'adresse de l'evénement : <?php the_field('adresse'); ?> </p>
            <p>La date et l'heure de l'événement : <?php the_field('date_et_heure'); ?> </p>
            <!-- <p>L'heure de l'événement : <?php the_field('heure'); ?> </p> -->
        </div>
    <?php endif; ?>
</main><!-- #main -->
<?php
get_footer();
