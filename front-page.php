<?php
// Modèle de base index.php

?>

<?php get_header(); ?>
<!-- <h2>Front-page.php</h2> -->
<div id="entete" class="global">
  <section class="entete__header">
    <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
    <h2 class="bgc-text"><span><?php echo get_bloginfo('description'); ?></span></h2>
    <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
    <a href="https://gftnth00.mywhc.ca/tim44/conference/" class="entete__button">Conférence de la semaine</a>


  </section>
  <?php get_template_part("gabarit/vague") ?>
</div>
<!-- Section pour afficher les articles populaires -->
<div id="populaire" class="global">
  <section>
    <h2>Les destinations les plus populaires</h2>
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

  </section>
</div>
<!-- Section pour afficher les catégories -->
<div id="categorie" class="global diagonal">
  <section class="section__destination">
    <h2>Liste complète de toutes les catégories</h2>
    <!-- gabarit pour afficher des cartes de catégorie -->
    <!-- get_categories() : Est l'ensemble des catégorie du site -->
    <!-- get_category() : Est l'ensemble des catégories d'un post  -->
    <?php get_template_part("gabarit/categorie") ?>

  </section>
</div>
<!-- Section pour afficher un événement -->
<div id="evenement" class="global">
  <section class="evenement__section">
    <h2>Traversées Culturelles</h2>
    <div class="traverse__culturelles">
      <?php
      // Appel du shortcode directement dans le fichier front-page.php
      echo do_shortcode('[em_destination]');
      ?>
    </div>
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