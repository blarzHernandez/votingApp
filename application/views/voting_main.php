<?php 
$committe = array("commitee1","committe2","committe3");
foreach ($committe as $value){

?>
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $value;?></h3>
  </div>
  <div class="panel-body">
    <?php 
    $candidatesArr = array(
      array("name"=>"Roberto Hernandez","country"=>"ES","committe"=>"PST","photo"=>"assets/images/candidate.jpg"),
      array("name"=>"Roberto Blarz","country"=>"ES","committe"=>"PST","photo"=>"assets/images/candidate.jpg"),
      array("name"=>"Blarz Hernandez","country"=>"ES","committe"=>"PvT","photo"=>"assets/images/candidate.jpg")
      );
    foreach ($candidatesArr as $key => $val) {
    ?>
      <div class="well col-sm-4">
        <img src="<?php echo $val["photo"];?>" alt="<?php echo 'title';?>" class="img-rounded">
      </div>
    <?php
        }
    ?>

  </div>
</div>
<?php

}
?>
