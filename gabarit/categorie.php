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