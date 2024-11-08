<?php get_header(); ?>

<div class="container noticia-individual">
    <!-- Botão de Voltar -->
    <a href="<?php echo home_url(); ?>" class="btn-voltar">Voltar</a>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="conteudo">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
