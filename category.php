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
<div id="categorie" class="global diagonal">
    <section class="categorie__section">
        <h2>Galerie</h2>
        <a href="#">Livre 1984</a>
        <blockquote>
            <p>
                “La liberté, c'est la liberté de dire que deux et deux font quatre.
                Lorsque cela est accordé, le reste suit.” “La guerre, c'est la paix,
                la liberté c'est l'esclavage,<span>
                    l'ignorance c'est la force.</span>” “Les intellectuels sont portés au totalitarisme bien plus que les
                gens ordinaires.”
            </p>
            <p>par George Orwell</p>
        </blockquote>
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