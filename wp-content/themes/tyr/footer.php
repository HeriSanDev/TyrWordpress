        <?php wp_footer(); ?>

      <?php if(is_home() || is_front_page()){?>
        <?php
             wp_nav_menu(array(
                 'theme_location' => 'MenuSite',
                 'container_class' => 'BottomFaixa'
             ));
        ?>
        <?php } ?>
        <script src ="<?php echo get_template_directory_uri()."/javascript.js"; ?>"></script>   
    </body>

</html>