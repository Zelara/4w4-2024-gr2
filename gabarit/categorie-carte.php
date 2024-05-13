<?php
// Gabarit pour afficher une carte de destination
?>

<div class="contenu clr-agencement-rouge2">
    <?php the_post_thumbnail("thumbnail"); ?>
    <h4 class="contenu-titre"> <?php the_title() ?></h4>
    <p> <?php echo wp_trim_words(get_the_content(), 10); ?></p>
    <p class="contenu-suite"><a href="<?php echo get_permalink(); ?>">La suite</a></p>
    <?php the_category('') ?>
</div>