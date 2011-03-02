<?php include_once("dao/FUENTEDAO.php")?>
<?php
  $id = $_GET["id"];  
  $FUENTE = FUENTE_find_by_id($id); 
?>

<form method="post" action="FUENTE_do_edit.php">

 <div>
  <div>
   <div>fuente</div>
   <div><input name="fuente" value="<?php echo $FUENTE->get_fuente(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


