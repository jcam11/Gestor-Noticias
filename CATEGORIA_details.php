<?php include_once("dao/CATEGORIADAO.php")?>
<?php
  $id = $_GET["id"];  
  $CATEGORIA = CATEGORIA_find_by_id($id); 
?>

 <div>
  <div>
   <div>categoria:</div>
   <div><?php echo $CATEGORIA->get_categoria(); ?></div>   
  </div> 
  
 </div> 


