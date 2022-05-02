<div class="BuscaFiltro">

<form name="FiltroBusca" id="FiltroBusca" action=<?php echo site_url()."/controllerFilter"?> method="post">
     <input type="hidden" name="CampoFilter" id="CampoFilter" value="<?php echo $CampoBusca; ?>">
     <select name="Categoria" id="Categoria" required>
          <option value="">Categoria</option>
     <?php
          $BFetch=$wpdb->get_results("select * from wp_terms where term_id>=4"); 
          foreach($BFetch as $Fetch){
               echo "<option value='$Fetch->term_id'>$Fetch->name</option>";
          }
     ?>
     </select>
     <input type="submit" value='Filtrar'>
</form>

</div>