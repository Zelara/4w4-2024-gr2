<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<h2>single.php</h2>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>La suite</h2>
        <div class="section__cours">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="carte">
                        <h4 class="carte-titre"> <?php the_title() ?></h4>
                        <p> <?php the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>

<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Événement</h2>
        <a href="#">Aventure</a>
        <blockquote>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum
            delectus est consectetur nobis accusantium nesciunt pariatur labore
            modi tempora perferendis, <span>necessitatibus a,</span> ex ratione
            neque fugit, repellendus id ab! Tenetur?
        </blockquote>
    </section>
    <?php get_template_part("gabarit/vague") ?>
</div>


<?php get_footer() ?>