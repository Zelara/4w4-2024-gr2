<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<!-- <h2>404.php</h2> -->
<div id="erreur" class="global">
  <section>
    <div class="contenu-erreur">
      <div class="haut-erreur">
        <h1 class="titre-erreur">Erreur 404</h1>
        <h2 class="texte-erreur">Vous essayez d'accéder à une page qui n'existe pas</h2>
        <p class="texte-erreur">Pour revenir à la page d'accueil cliquer sur le lien suivant</p>
        <div class="boite-erreur">
          <a href="<?php echo get_bloginfo('url'); ?>"> Explorez le monde</a>
        </div>
        <?php get_search_form() ?>
        <?php wp_nav_menu(array("menu" => "categorie-liens")); ?>
      </div>
      <div class="bas-erreur">
        <!-- Ajout de l'img -->
        <?php
        $image_id = 853;
        $image = wp_get_attachment_image($image_id, 'full', false, array('class' => 'img-erreur'));
        echo $image;
        ?>
      </div>
    </div>
  </section>
</div>

<?php get_footer() ?>