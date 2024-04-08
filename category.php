<?php get_header(); ?>
<!-- <h2>category</h2> -->

<div id="categorie-seul" class="global">
    <section>
        <h2>La catégorie</h2>
        <div class="section__cours">
            <?php
            // Vérifie s'il y a des articles à afficher
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="contenu clr-agencement-rouge2">
                        <h4 class="contenu-titre"> <?php the_title() ?></h4>
                        <p> <?php echo wp_trim_words(get_the_content(), 10); ?></p>
                        <p class="contenu-suite"><a href="<?php echo get_permalink(); ?>">La suite</a></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </section>
</div>
<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Conseils</h2>
        <p>
            Lors de vos voyages, gardez toujours une copie numérique et papier de vos documents
            importants tels que votre passeport, votre visa, vos billets d'avion et vos
            réservations d'hôtel. Avoir ces informations sous la main peut vous éviter des
            soucis en cas de perte ou de vol.
        </p>
    </section>
    <?php get_template_part("gabarit/vague") ?>
</div>


<?php get_footer() ?>