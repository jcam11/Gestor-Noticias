<?php include_once("dao/AUTORDAO.php")?>
<?php
  $id = $_GET["id"];  
  $AUTOR = AUTOR_find_by_id($id); 
?>

 <div>
  <div>
   <div>autor:</div>
   <div><?php echo $AUTOR->get_autor(); ?></div>   
  </div> 
  
 </div> 


