<?php
// Registrar Custom Post Type 'Notícias'
function registrar_cpt_noticias() {
    $args = array(
        'label' => 'Notícias',
        'public' => true,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
    );
    register_post_type('noticias', $args);
}
add_action('init', 'registrar_cpt_noticias');

// Registrar Taxonomia 'Categoria de Notícias'
function registrar_taxonomia_categoria_noticias() {
    $args = array(
        'label' => 'Categorias de Notícias',
        'rewrite' => array('slug' => 'categoria-noticia'),
    );
    register_taxonomy('categoria_noticia', 'noticias', $args);
}
add_action('init', 'registrar_taxonomia_categoria_noticias');


function load_noticia_content() {
    if (isset($_GET['post_id'])) {
        $post_id = intval($_GET['post_id']);
        $post = get_post($post_id);
        
        if ($post) {
            echo '<h2>' . $post->post_title . '</h2>';
            echo '<p>' . $post->post_content . '</p>';
        } else {
            echo '<p>Notícia não encontrada.</p>';
        }
    }
}


?>
