<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <title><?php 
            //bloginfo('name');

            if(is_single()){
                echo "post";
            }elseif(is_home() || is_front_page()){
                echo "página inicial";
            }elseif(is_page()){
                echo "página";
            }
        ?></title>
        <meta name="Descrition" content="<?php bloginfo("description")?>">
        <meta name="keywords" content="Criando um site, ciração de site, desenvolvimento de site">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head();?>
    </head>

    <body <?php if(is_home() || is_front_page()){ body_class();} ?>>
    <div class="TopFaixa"> </div>
    <div class="Logomarca">

        <?php the_custom_logo(); ?>
    </div>

    <div class="buton-mobile">
       
        <img src="\wp-content\themes\tyr\images\mobileBtn.png" alt="Button Mobile Tyr" title="Button Mobile Tyr">
    </div>

    <div class="Search">
        <form action="busca" name="formsearch" id="formsearch" method="get">
            <input type="text" name="CampoBusca" id="CampoBusca" placeholder="Encontre-se na natureza">
            <button type="submit"><img src="\wp-content\themes\tyr\images\search.png" alt=""></button>
        </form>
    </div>

    <div class="ButtonLogin">
            <a href="<?php echo get_option('siteurl').'/wp-admin'; ?>">Login</a>
    </div>

    <div class="ButtonSignUp">
            <a href="<?php echo get_template_directory_uri().'/cadastro'; ?>">Cadastre-se</a>
    </div>
       
        
    
    
