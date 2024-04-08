<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<h2>404.php</h2>
<div id="erreur" class="global">
  <section>
    <h2>Accueil</h2>
    <div class="flexbox">
      <p>L'adresse que vous avez entrez n'existe pas. Vous pouvez revenir à la page d'accueil en cliquant sur ce lien</p>
      <a href="<?php echo get_bloginfo('url'); ?>"> <?php echo get_bloginfo('name'); ?></a>
    </div>
  </section>
</div>

<?php get_footer() ?>