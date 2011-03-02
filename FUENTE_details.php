<?php include_once("dao/FUENTEDAO.php")?>
<?php
  $id = $_GET["id"];  
  $FUENTE = FUENTE_find_by_id($id); 
?>

 <div>
  <div>
   <div>fuente:</div>
   <div><?php echo $FUENTE->get_fuente(); ?></div>   
  </div> 
  
 </div> 


