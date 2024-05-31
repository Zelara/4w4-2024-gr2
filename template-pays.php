<?php

/**
 * Template Name: Pays
 */
?>

<?php get_header(); ?>
<main class="site__main">
    <div class="section-a">
        <h1>Les plus magnifiques pays</h1>
        <p>Laissez-vous emporter par la découverte des destinations de voyage les plus sublimes que notre monde a à offrir,
            des endroits enchanteurs où la beauté naturelle se mêle harmonieusement à la richesse culturelle,
            vous invitant ainsi à explorer, à apprendre et à vous émerveiller à chaque étape de votre périple.</p>
    </div>

    <!-- <div class="section-b">
        <div class="gallery">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 1">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 2">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 3">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image 4">
        </div>
    </div> -->

    <?php get_template_part("gabarit/vague"); ?>

    <div class="section-d">
        <div id="rest-api-content">
            <!-- Contenu généré par l'API REST sera inséré ici -->
            <?php echo do_shortcode('[carrousel]'); ?>
    </div>

    <div class="section-e">
        <?php get_template_part("gabarit/vague"); ?>
    </div>

</main><!-- #main -->
<?php get_footer(); ?>