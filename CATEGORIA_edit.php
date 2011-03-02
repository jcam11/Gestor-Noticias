<?php include_once("dao/CATEGORIADAO.php")?>
<?php
  $id = $_GET["id"];  
  $CATEGORIA = CATEGORIA_find_by_id($id); 
?>

<form method="post" action="CATEGORIA_do_edit.php">

 <div>
  <div>
   <div>categoria</div>
   <div><input name="categoria" value="<?php echo $CATEGORIA->get_categoria(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


