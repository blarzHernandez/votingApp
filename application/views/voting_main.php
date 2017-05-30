<?php 
$committe = array("commitee1","committe2","committe3");
foreach ($committe as $value){

?>
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title"></h3>
  </div>
  <div class="panel-body">
   <?php echo $value;?>
  </div>
</div>
<?php

}
?>
