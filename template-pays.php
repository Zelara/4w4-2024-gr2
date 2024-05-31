<?php

/**
 * Template Name: Pays
 */
?>

<?php get_header(); ?>
<main>
    <div class="pays__main">
        <div class="section-a">
            <h1>Les plus magnifiques pays</h1>
            <p>Laissez-vous emporter par la découverte des destinations de voyage les plus sublimes que notre monde a à offrir,
                des endroits enchanteurs où la beauté naturelle se mêle harmonieusement à la richesse culturelle,
                vous invitant ainsi à explorer, à apprendre et à vous émerveiller à chaque étape de votre périple.</p>
        </div>
        <div class="section__destination">
            <div class="gallery">
                <!-- Insérez vos images ici -->
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pays1.jpg" alt="Image 1">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pays2.jpg" alt="Image 2">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pays3.jpg" alt="Image 3">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pays4.jpg" alt="Image 4">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pays5.jpg" alt="Image 5">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pays6.jpg" alt="Image 6">
                </div>
            </div>
        </div>
    </div>

    <div class="pays__second">
        <div class="contenu-pour-vague">
            <div id="entete"><?php get_template_part("gabarit/vague") ?></div>
        </div>
        <div class="section-d">
            <div id="rest-api-content">
                <!-- Contenu généré par l'API REST sera inséré ici -->
                <?php echo do_shortcode('[pays_menu]'); ?>
            </div>
        </div>
    </div>
</main><!-- #main -->
<div id="evenement"><?php get_template_part("gabarit/vague") ?></div>

<?php get_footer(); ?>