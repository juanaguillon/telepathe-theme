<?php function telepathe_content(){
  ?>
    <div class="all-content">
      <form action="#" method="post">
        <label for="telepathe_check_sidebar">¿Mostrar Sidebar?</label>
        <input type="checkbox" name="telepathe_checking_sidebar" id="telepathe_check_sidebar">
        <input name="send_form_telepathe" type="submit" value="Enviar" class="button">
      </form>
    </div>
  <?php
} 

if ( isset($_POST['send_form_telepathe'])){
  $checking = $_POST['telepathe_checking_sidebar'];
  add_option( "telepathe_exists_sidebar", $checking );
}

?>
