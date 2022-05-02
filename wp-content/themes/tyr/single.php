<?php get_header();  ?>

<?php the_post(); ?>
  
<div class="SingleTitle">
    <h1><?php the_title();?></h1>
    <small><?php the_author(); ?></small>
</div>
<div class="SingleImage">
    <?php 

        $t=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
        $m=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
        $ml=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');
        $l=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

    ?>
    <picture>
            <source media="(max-width: 480px)" srcset="<?php echo $t[0]; ?>"/>
            <source media="(min-width: 481px) and (max-width: 768px)" srcset="<?php echo $m[0]; ?>"/>
            <source media="(min-width: 769px) and (max-width: 1199px)" srcset="<?php echo $ml[0]; ?>"/>
            <source media="(min-width: 1200px)" srcset="<?php echo $l[0]; ?>"/>
            <img
            src="<?php echo $l[0]; ?>"
            alt="Imagem do post <?php the_title(); ?>"
            title="Imagem do post <?php the_title(); ?>"
            
            />
    </picture>
    <br>
    <br>
    <?php the_field('categoria'); ?>

</div>

<div class="SingleText">
    <?php the_content(); ?>
    
</div>

<div class="SingleComment">
    <?php comments_template(); ?>
</div>

<?php get_footer(); ?>
