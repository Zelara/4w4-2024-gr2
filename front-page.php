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
    <button class="entete__button">Événements</button>
  </section>
  <?php get_template_part("gabarit/vague") ?>
</div>
<div id="populaire" class="global">
  <section>
    <h2>Les destinations les plus populaires</h2>
    <div class="section__cours">

      <!-- get_the_title() // retourne une chaîne qui contient le titre
           the_title() // echo du titre -->

      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="contenu clr-agencement-rouge2">
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
<div id="categorie" class="global diagonal">
  <section class="section__cours">
    <h2>Liste complète de toutes les catégories</h2>

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
<div id="evenement" class="global">
  <section class="evenement__section">
    <h2>Événement</h2>
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