<?php /*  Template Name: Controller Filter */ ?>

<?php get_header();  ?>

<?php 

$CampoBusca = $_POST['CampoFilter'];
$Categoria = $_POST['Categoria'];

$Resultado=$wpdb ->get_results("select * from wp_term_relationships where
     term_taxonomy_id='$Categoria' ");

     include(get_template_directory().'/includes/filterBar.php');

     foreach ($Resultado as $Resultados){

          $PostId=$Resultados->object_id;
          $ResultadoPost=$wpdb ->get_results("select * from wp_posts where ID='$PostId'
          and (post_title like '%$CampoBusca%' or post_content like '%$CampoBusca%')
          and post_status = 'publish' and post_type='post' order by ID desc ");

          foreach ($ResultadoPost as $post){
               setup_postdata($post);
               $MediumImage=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'medium');
               include(get_template_directory().'/includes/posts.php');
          }
      } 


?>


<?php get_footer();  ?>

