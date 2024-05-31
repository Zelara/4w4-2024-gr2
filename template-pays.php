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

            <!-- Vérifie s'il y a des articles à afficher -->
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                    $ma_categorie = "carte";
                    if (in_category("galerie")) {
                        $ma_categorie = "galerie";
                    }
                    get_template_part("gabarit/categorie", $ma_categorie);
            ?>
                <?php endwhile; ?>
            <?php endif; ?>
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



</main><!-- #main -->
<div id="evenement"><?php get_template_part("gabarit/vague") ?></div>

<?php get_footer(); ?>