<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css"> 
</head>

<header>
    <div>
        <a class="logo" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo/News_Flash_LOGO.png" alt="">
        </a>
    </div>
    <div class="container">
        <div class="menu">
            <a href="<?php echo admin_url('post-new.php?post_type=noticias'); ?>">Cadastrar Notícia</a>
            <a href="<?php echo admin_url('edit-tags.php?taxonomy=categoria_noticia&post_type=noticias'); ?>">Cadastrar Categoria</a>
        </div>
        <div class="search">
            <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" placeholder="Buscar notícias...">
                <input type="hidden" name="post_type" value="noticias" />
                <button type="submit">🔍</button>
            </form>
        </div>
    </div>
</header>
