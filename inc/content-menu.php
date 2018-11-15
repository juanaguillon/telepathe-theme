<?php function telepathe_content(){
  ?>
    <div class="all-content">
      <form action="#" method="post">
        <label for="telepathe_check_sidebar">¿Mostrar Sidebar?</label>
        <input type="checkbox" name="telepathe_checking_sidebar" id="telepathe_check_sidebar">
        <?php 
        
        if( get_option('telepathe_exists_sidebar') == 'on'){
          echo '<p>Actualmente está activo</p>';
        }else{
          echo '<p>No está activo actualmente</p>';
        }
        ?>
        <input name="send_form_telepathe" type="submit" value="Enviar" class="button">
      </form>
      <form method="post" >
      <input type="submit" name="delete" class="button" value="Eliminar Opción">
      </form>
    </div>
  <?php
} 

if ( isset($_POST['send_form_telepathe'])){
  $checking = $_POST['telepathe_checking_sidebar'];
  update_option( "telepathe_exists_sidebar", $checking );
}

if( isset( $_POST['delete'] ) ){
  delete_option('telepathe_exists_sidebar');
}


