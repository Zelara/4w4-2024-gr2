<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<h2>Front-page.php</h2>
<div id="entete" class="global">
  <section class="entete__header">
    <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
    <h2 class="bgc-text"><span><?php echo get_bloginfo('description'); ?></span></h2>
    <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
    <button class="entete__button">Événements</button>
  </section>
  <?php get_template_part("gabarit/vague") ?>
</div>
<div id="accueil" class="global">
  <section class="accueil__section">
    <h2>Accueil</h2>
    <div class="section__cours">

      <!-- if (have_posts()) {
          while (have_posts()) {
            the_post();
            the_title('<p>', '</p>');
            $contenu = get_the_content();
            $contenu = wp_trim_words($contenu, 10);
            echo $contenu;
          }
        }   -->

      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();

      ?>
          <div class="carte">
            <h4> <?php the_title() ?></h4>
            <p> <?php echo wp_trim_words(get_the_content(), 10); ?></p>
            <p><?php get_permalink() ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </section>
</div>
<div id="galerie" class="global diagonal">
  <section class="galerie__section">
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
  <!-- <div class="vague">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: var(--couleur-arriere-footer)"></path>
    </svg>
  </div> -->
  <?php get_template_part("gabarit/vague") ?>
</div>


<?php get_footer() ?>