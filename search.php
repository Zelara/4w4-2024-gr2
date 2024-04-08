<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<!-- <h2>Search.php</h2> -->


<!-- Section pour afficher les articles populaires -->
<div id="populaire" class="global">
  <section>
    <h2>Résultat de la recherche</h2>
    <div class="flexbox">


      <!-- Vérifie s'il y a des articles à afficher -->
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="contenu clr-agencement-rouge2">
            <?php the_post_thumbnail("thumbnail"); ?>
            <h4 class="contenu-titre"> <?php the_title() ?></h4>
            <p> <?php echo wp_trim_words(get_the_content(), 10); ?></p>
            <p class="contenu-suite"><a href="<?php echo get_permalink(); ?>">La suite</a></p>
            <?php the_category('') ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </section>
</div>

<?php get_footer() ?>