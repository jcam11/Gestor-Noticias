<?php include_once("dao/AUTORDAO.php")?>
<?php
  $id = $_GET["id"];  
  $AUTOR = AUTOR_find_by_id($id); 
?>

<form method="post" action="AUTOR_do_edit.php">

 <div>
  <div>
   <div>autor</div>
   <div><input name="autor" value="<?php echo $AUTOR->get_autor(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


