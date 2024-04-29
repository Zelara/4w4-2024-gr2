<?php get_header(); ?>
<!-- <h2>single.php</h2> -->

<div id="single" class="global">
    <section>
        <h2>La suite</h2>
        <div class="section__cours">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="contenu clr-agencement-rouge2">
                        <?php the_post_thumbnail("medium"); ?>
                        <h4 class="contenu-titre"> <?php the_title() ?></h4>
                        <p> <?php the_content(); ?></p>
                        <p>Température minimum: <?php the_field("temperature_minimum") ?></p>
                        <p>Température maximum: <?php the_field("temperature_maximum") ?></p>
                        <p>Ville avoisinante: <?php the_field("ville_avoisinante") ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- Section conseils -->
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