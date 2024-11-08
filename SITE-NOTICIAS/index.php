<?php get_header(); ?>

<div class="container">
    
    <div class="noticias-container">
        <?php
        // Query personalizada para exibir as últimas notícias
        $args = array(
            'post_type' => 'noticias',   // Custom Post Type "noticias"
            'posts_per_page' => 9        // Exibir as 6 últimas notícias
        );
        
        $noticias_query = new WP_Query($args);
        
        if ($noticias_query->have_posts()) :
            while ($noticias_query->have_posts()) : $noticias_query->the_post(); ?>
                <div class="noticia">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Saiba Mais</a>
                </div>
            <?php endwhile;
        else : ?>
            <p>Nenhuma notícia encontrada.</p>
        <?php endif;

        // Resetar a Query para não interferir em outras páginas
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
