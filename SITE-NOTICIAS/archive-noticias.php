<?php get_header(); ?>

<div class="container noticias-container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="noticia">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Saiba Mais</a>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Nenhuma notícia encontrada.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
