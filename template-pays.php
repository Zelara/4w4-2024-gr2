<?php

/**
 * Template Name: Pays
 */
?>

<?php get_header(); ?>
<main class="site__main">
    <?php
    if (have_posts()) : the_post(); ?>
        <div class="pays__texte">
            <h1>Les plus beaux pays</h1>
            <p>Découvrez les plus belles destinations de voyage autour du monde.</p>
        </div>

        <?php get_template_part("gabarit/vague"); ?>

        <div class="gallery">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 1">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 2">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 3">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 4">
        </div>

        <?php get_template_part("gabarit/vague"); ?>

        <div id="rest-api-content">
            <!-- Contenu généré par l'API REST sera inséré ici -->
            <?php echo do_shortcode('[pays_menu]'); ?>
        </div>

        <?php get_template_part("gabarit/vague"); ?>
    <?php endif; ?>
</main><!-- #main -->
<?php get_footer(); ?>