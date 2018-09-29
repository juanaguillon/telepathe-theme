<?php 

if ( is_active_sidebar( 'my_sidebar' ) ){
  ?>
    <div class="all_sidebar">
      <div class="all_widget">
        <?php dynamic_sidebar('my_sidebar'); ?>
      </div>        
    </div>
  <?php
}

?>