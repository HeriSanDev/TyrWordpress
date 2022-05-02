<a href="<?php the_permalink(); ?>">
               <div class="Post" style = "background: url('<?php echo $MediumImage[0]?>')
               center center no-repeat; ">

                    <div class ="Post-Title">
                         <?php  the_title(); ?>
                          | 
                          <img src="<?php echo get_template_directory_uri().'/images/comentario.png' ?>"
                           alt="Comentários do Post">
                          <?php
                           $coments_count = wp_count_comments($post->ID);
                           echo $coments_count->approved;
                          ?>
                    </div>

               </div>
</a>