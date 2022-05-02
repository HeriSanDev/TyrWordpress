<?php /*  Template Name: Cadastro */ ?>

<?php get_header(); ?>

<form name="FormSignUp" id="formSignUp" action="<?php echo site_url().'/controller-cadastro'; ?>"
 method="post" enctype="multipart/form-data">

     <div class="CadastroFormulario">
          <input type="text" name="Name" id="Name" placeholder="Nome:" required>
     </div>

     <div class="CadastroFormulario">
          <input type="text" name="LastName" id="LastName" placeholder="Sobrnome:" required>
     </div>

     <div class="CadastroFormulario">
          <input type="email" name="Email" id="Email" placeholder="Email:" required>
     </div>

     <div class="CadastroFormulario">
          <input type="text" name="Site" id="Site" placeholder="Site:">
     </div>

     <div class="CadastroFormulario">
          <input type="text" name="User" id="User" placeholder="Usuário:" required>
     </div>

     <div class="CadastroFormulario">
          <input type="password" name="Password" id="Password" placeholder="Senha:" required>
     </div>

     <div class="CadastroFormulario">
          <input type="password" name="CheckPass" id="CheckPass" placeholder="Confirmar Senha:" required>
     </div>
     <div class="CadastroFormulario">
     Foto do perfil:  <input type="file" name="Image[]" id="Image" required>
     </div>

     <div class="CadastroFormulario">
          <input type="submit" value="Cadastrar">
     </div>
</form>

 <?php get_footer(); ?>




