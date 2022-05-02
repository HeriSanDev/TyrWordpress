<?php

//persinaliza tela de login
function PersonalizandoLogin() { ?>
    <style type="text/css">
        body.login {background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/fundo2.jpg);}
        body.login div#login {}
        body.login div#login .message {margin-bottom: 0px} {}
        body.login div#login h1 {background: #FFF; padding: 10px; border-top-right-radius: 10px; border-top-left-radius: 10px;}
        body.login div#login form#loginform {margin-top: 0; border: 0; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;}
        body.login div#login form#loginform input {border-radius: 10px;}
        body.login div#login form#loginform p.submit input#wp-submit {background-color: #568f75}
        body.login div#login p#nav {display: none}
        body.login div#login p#nav a {display: none}
        body.login div#login p#backtoblog {display: none}
        body.login div#login p#backtoblog a {display: none}

        #login h1 a, .login h1 a { background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/log-hss-dev2.png); height:180px; width:290px; background-size: 290px 180px; background-repeat: no-repeat; justify-content: center; align-items: center;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'PersonalizandoLogin' );

//Ocultar a barra de ferramentas

function OcultarBarra(){
    return false;
}
add_filter("show_admin_bar","OcultarBarra");

//Adicionando suporte de logomarca
add_theme_support('custom-logo', array(
    'height' => 200,
    'width'  => 400,
    'flex-height' =>true,
    'flex-width' => true,
    'header-text' =>array('site-title', 'site-description')

) );

//Adicionar background

add_theme_support('custom-background');


#linkar o CSS
wp_enqueue_style( 'style', get_stylesheet_uri('../tyr/style.css'));

//Adicionar imagem destacada ao posterior

add_theme_support("post-thumbnails");

//Adicionar JQUERY
wp_enqueue_script("jquery");

//Criar o registro do menu
function RegistroMenu(){
    register_nav_menu('MenuSite',__('Menu do site'));
}
add_action('init', 'RegistroMenu');

//Login Automatico após o cadastro

function automatically_log_me_in( $user_id ) {
    wp_set_current_user( $user_id );
    wp_set_auth_cookie( $user_id );
    header('Location: wp-admin');
    exit(); 
}
add_action( 'user_register', 'automatically_log_me_in' );