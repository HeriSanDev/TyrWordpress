<strong>Deixe seu comentário:</strong><br>

<form name="commentform"
      id="commentform"
      action="<?php echo get_option('siteurl').'/wp-comments-post.php' ; ?>"
      method="post">

               <?php
                    $user_ID =get_current_user_id();
                    if($user_ID){
               ?>
               <p>Autenticado como
                    <a href="<?php echo get_option('/wp-admin/profile.php'); ?>">
                         <?php echo $user_identity;?>
                    </a>
                    <br>
                    <a href="<?php echo wp_logout_url(); ?>">
                         Sair
                    </a>
               </p>
                         
               <?php } else{?>

                    <div class="SingleForm">
                         Autor: <br>
                         <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" required>
                    </div>

                    <div class="SingleForm">
                         Email: <br>
                         <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" required>
                    </div>

                    <div class="SingleForm">
                         Website: <br>
                         <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" required>
                    </div>

               <?php } ?>

               <div class="SingleForm">
                    Escreva seu comentário: <br>
                    <textarea name="comment" id="comment" required></textarea>
               </div>

               <div class="SingleForm">
                    <input type='submit' value='Comentar'>
               </div>

               <?php comment_id_fields(); ?>
</form>

<?php
     $comment_array= get_approved_comments($post->ID); 
     $iCom=1;
     arsort($comment_array);
     foreach($comment_array as $comments){
        if($iCom <=2){
?>
          <div class="SingleApprovedComents">
               <strong><?php echo $comments->comment_author; ?></strong>
               <br>
               <?php echo $comments->comment_content; ?>


          </div>
<?php
        }
        $iCom++;
     }
?>

