<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<h2>single.php</h2>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class="section__cours">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="carte">
                        <h4> <?php the_title() ?></h4>
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
    <!-- <div class="vague">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: var(--couleur-arriere-footer)"></path>
    </svg>
  </div> -->
    <?php get_template_part("gabarit/vague") ?>
</div>


<?php get_footer() ?>