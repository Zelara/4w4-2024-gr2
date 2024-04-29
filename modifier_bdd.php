<?php
// Chargez WordPress
require('wp-load.php');

// Récupérez les articles en doublon (même post_title)
global $wpdb;
$duplicate_posts = $wpdb->get_results("
    SELECT ID, post_title, GROUP_CONCAT(terms.term_id) AS category_ids
    FROM {$wpdb->posts} AS posts
    LEFT JOIN {$wpdb->term_relationships} AS relationships ON posts.ID = relationships.object_id
    LEFT JOIN {$wpdb->term_taxonomy} AS taxonomy ON relationships.term_taxonomy_id = taxonomy.term_taxonomy_id
    LEFT JOIN {$wpdb->terms} AS terms ON taxonomy.term_id = terms.term_id
    WHERE posts.post_type = 'post'
    AND posts.post_status = 'publish'
    GROUP BY post_title
    HAVING COUNT(*) > 1
");

// Parcourez les doublons
foreach ($duplicate_posts as $duplicate_post) {
    // Récupérez l'ID et les catégories uniques du premier doublon
    $post_id = $duplicate_post->ID;
    $category_ids = explode(',', $duplicate_post->category_ids);
    $unique_category_ids = array_unique($category_ids);

    // Mettez à jour l'article restant avec les catégories uniques
    $unique_category_ids_string = implode(',', $unique_category_ids);
    $wpdb->query("
        UPDATE {$wpdb->term_relationships}
        SET term_taxonomy_id = $unique_category_ids[0]
        WHERE object_id = $post_id
    ");

    // Supprimez les doublons
    $wpdb->query("
        DELETE FROM {$wpdb->posts}
        WHERE ID != $post_id
        AND post_title = '{$duplicate_post->post_title}'
    ");
}

echo 'Opération terminée.';
