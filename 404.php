<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<!-- <h2>404.php</h2> -->
<div id="erreur" class="global">
  <section>
    <div class="contenu-erreur">
      <?php the_post_thumbnail("thumbnail"); ?>
      <h2 class="titre-erreur">Erreur 404</h2>
      <p class="texte-erreur">L'adresse que vous avez entrez n'existe pas. Vous pouvez revenir à la page d'accueil en cliquant sur ce lien</p>
      <p class="texte-erreur">Pour revenir à la page d'accueil cliquer sur le lien suivant</p>
      <div class="boite-erreur">
        <a href="<?php echo get_bloginfo('url'); ?>"> <?php echo get_bloginfo('name'); ?></a>
      </div>
      <?php get_search_form() ?>
      <?php wp_nav_menu(array("menu" => "footer")); ?>
    </div>
  </section>
</div>

<?php get_footer() ?>