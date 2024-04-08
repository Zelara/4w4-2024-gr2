<?php
// Modèle de base index.php
?>

<?php get_header(); ?>
<h2>Index.php</h2>
<!-- Section pour afficher les articles populaires -->
<div id="populaire" class="global">
  <section>
    <h2>Accueil</h2>
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
<!-- Section pour afficher les catégories -->
<div id="categorie" class="global diagonal">
  <section class="flexbox">
    <h2>Liste complète de toutes les catégories</h2>
    <!-- get_categories() : Est l'ensemble des catégorie du site -->
    <!-- get_category() : Est l'ensemble des catégories d'un post -->
    <?php
    $categories = get_categories();
    foreach ($categories as $category) : ?>
      <div class="contenu clr-agencement-rouge2">
        <h4 class="contenu-titre"><?php echo $category->name; ?></h4>
        <p><?php echo wp_trim_words($category->description, 10); ?></p>
        <p><?php echo sprintf(_n('<span class="article-nombre">%d</span> Article', '<span class="article-nombre">%d</span> Articles', $category->count), $category->count); ?></p>
        <p class="contenu-lien-article"><a href="<?php echo esc_url(add_query_arg('cat', $category->term_id, get_category_link($category->term_id))); ?>">Voir tous les articles</a></p>
      </div>
    <?php endforeach; ?>

  </section>
</div>
<?php get_footer() ?>