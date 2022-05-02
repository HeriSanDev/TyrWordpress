 <?php /*  Template Name: Controller Cadastro */ ?>
 <?php

 $Id=0;
 $Name = filter_input(INPUT_POST,'Name', FILTER_SANITIZE_SPECIAL_CHARS);
 $LastName = filter_input(INPUT_POST,'LastName', FILTER_SANITIZE_SPECIAL_CHARS);
 $Email = filter_input(INPUT_POST,'Email', FILTER_SANITIZE_SPECIAL_CHARS);
 $Site = filter_input(INPUT_POST,'Site', FILTER_SANITIZE_SPECIAL_CHARS);
 $User = filter_input(INPUT_POST,'User', FILTER_SANITIZE_SPECIAL_CHARS);
 $Password = filter_input(INPUT_POST,'Password', FILTER_SANITIZE_SPECIAL_CHARS);
 $CheckPass = filter_input(INPUT_POST,'CheckPass', FILTER_SANITIZE_SPECIAL_CHARS);
 $Image=$_FILES['Image']['tmp_name'];
 $extension = $_FILES['Image']['name'];
 $extension[0]= strrchr($extension[0],'.');
 $ImageType=$_FILES['Image']['type'];

 $rand = rand().md5(strtotime("now"));
 

 
 $FullName = $Name.' '.$LastName;
 $Data= Date('Y-m-d g:i:s');

 $DestinoImg = $_SERVER['DOCUMENT_ROOT']."/wp-content/uploads/Perfil/$rand$extension[0]";


 $Resultado=$wpdb->get_results("select * from wp_users where user_login='$User' or user_email='$Email'");


 if($Password != $CheckPass){
        echo "As senhas não conferem";
 }elseif(count($Resultado) > 0){
       echo "Nome de usuário ou e-mail já cadastrados";
 }else{
       $hash = wp_hash_password($Password);
       $wpdb->get_results("insert into wp_users values(
              '$Id',
              '$User',
              '$hash',
              '$User',
              '$Email',
              '$Site',
              '$Data',
              '',
              '0',
              '$User'           
       )");
       
       $IdUser=$wpdb->get_results("select * from wp_users where user_login='$User'");
       foreach($IdUser as $IdUsers){
             $IdUs = $IdUsers->ID; 
       }

       $IdLastPost=$wpdb->get_results("select * from wp_posts order by ID desc limit 1");
       foreach($IdLastPost as $IdLastPosts){
              $IdLPost = $IdLastPosts->ID + 1; 
        }

        $wpdb->get_results("insert into wp_posts values(
              '$IdLPost',
              '$IdUs',
              '$Data',
              '$Data',
              '',
              '$rand$extension[0]',
              '',
              'inherit',
              'open',
              'closed',
              '',
              '$rand$extension[0]',
              '',
              '',
              '$Data',
              '$Data',
              '',
              '0',
              '$DestinoImg',
              '0',
              'attachment',
              '$ImageType[0]',
              '0'
      )");


       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              'wp_capabilities',
              'a:1:{s:6:\"author\";b:1;}'
       )");
       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              'wp_user_level',
              '2'
       )");
       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              'nickname',
              '$User'
       )");
       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              'first_name',
              '$Name'
       )");
       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              'last_name',
              '$LastName'
       )");
       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              'locale',
              'pt_BR'
       )");

       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              'wp_user_avatar',
              '$IdLPost'
       )");
       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              '_wpupa_attachment_id',
              '$IdLPost'
       )");
       $wpdb->get_results("insert into wp_usermeta values(
              '$Id',
              '$IdUs',
              '_wpupa_default',
              'wp_user_profile_avatar'
       )");


       $wpdb->get_results("insert into wp_postmeta values(
              '$Id',
              '$IdLPost',
              '_wp_attachment_wp_user_avatar',
              '$IdUs'
       )");
       $wpdb->get_results("insert into wp_postmeta values(
              '$Id',
              '$IdLPost',
              '_wp_attached_file',
              'Perfil/$rand$extension[0]'
       )");
       $wpdb->get_results("insert into wp_postmeta values(
              '$Id',
              '$IdLPost',
              '_wp_attachment_metadata',
              'a:5:{s:5:\"width\";i:1400;s:6:\"height\";i:917;s:4:\"file\";s:24:\"Perfil/$rand$extension[0]\";s:5:\"sizes\";a:4:{s:6:\"medium\";a:4:{s:4:\"file\";s:24:\"$rand-300x197$extension[0]\";s:5:\"width\";i:300;s:6:\"height\";i:197;s:9:\"mime-type\";s:10:\"$ImageType[0]\";}s:5:\"large\";a:4:{s:4:\"file\";s:25:\"$rand-1024x671$extension[0]\";s:5:\"width\";i:1024;s:6:\"height\";i:671;s:9:\"mime-type\";s:10:\"$ImageType[0]\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:24:\"$rand-150x150$extension[0]\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"$ImageType[0]\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:24:\"$rand-768x503$extension[0]\";s:5:\"width\";i:768;s:6:\"height\";i:503;s:9:\"mime-type\";s:10:\"$ImageType[0]\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'
       )");
       
       move_uploaded_file($Image[0],$DestinoImg);
       $Cred= array("user_login"=>$IdUs,"user_password"=>$hash);

       automatically_log_me_in( $IdUs);
       
 }
?>


