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
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- Section Événement -->
<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Événement</h2>
        <blockquote>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum
            delectus est consectetur nobis accusantium nesciunt pariatur labore
            modi tempora perferendis, <span>necessitatibus a,</span> ex ratione
            neque fugit, repellendus id ab! Tenetur?
        </blockquote>
    </section>
    <!-- Gabarit pour une vague -->
    <?php get_template_part("gabarit/vague") ?>
</div>


<?php get_footer() ?>