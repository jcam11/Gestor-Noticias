<?php include_once("dao/FUENTEDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $FUENTE = FUENTE_find_by_id($id);  
  $result = $FUENTE->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$FUENTE->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

