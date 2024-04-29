<?php
// Chargez WordPress
require('wp-load.php');
// Récupérez les articles en utilisant WP_Query
$args = array(
    'post_type' => 'post', // Type de contenu : article
    'posts_per_page' => -1 // Récupérer tous les articles
);
$query = new WP_Query($args);

// Créez un tableau HTML
echo '<table>';
echo '<tr><th>ID</th><th>Titre de l\'article</th></tr>';

// Vérifiez si des articles ont été trouvés
if ($query->have_posts()) {
    // Parcourez chaque article
    $compteur = 1;
    while ($query->have_posts()) {
        $query->the_post();
        // Récupérez l'ID de l'article
        $post_id = get_the_ID();
        // Récupérez le titre de l'article
        $post_title = get_the_title();
        $compteur++;
        // Affichez l'ID et le titre de l'article dans une nouvelle ligne du tableau
        echo "<tr><td>$compteur</td><td>$post_id</td><td>$post_title</td></tr>";
    }
    // Réinitialisez les données de la requête
    wp_reset_postdata();
} else {
    // Aucun article trouvé
    echo '<tr><td></td><td colspan="2">Aucun article trouvé.</td></tr>';
}

// Fermez le tableau HTML
echo '</table>';
