<?php /*  Template Name: Busca Simples */ ?>

<div id="ResultadoBuscaPosts">
<?php get_header();
$CampoBusca = $_GET['CampoBusca'];
?>


    
<?php include(get_template_directory().'/includes/filterBar.php');?>
   


<?php 
      $Resultado=$wpdb ->get_results("select * from wp_posts where
      (post_title like '%$CampoBusca%' or post_content like '%$CampoBusca%')
      and post_status = 'publish' and post_type='post'");// order by ID desc 
      $Resultado=get_posts('post_order=menu_oreder');

     foreach($Resultado as $post){
     setup_postdata($post);
     //the_post_thumbnail('medium');
     $MediumImage=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'medium');

     include(get_template_directory().'/includes/posts.php');

     }
?>


</div>

     <?php get_footer(); ?>




