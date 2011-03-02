<?php include_once("dao/CATEGORIADAO.php")?>
<?php
  $id = $_GET["id"];
  
  $CATEGORIA = CATEGORIA_find_by_id($id);  
  $result = $CATEGORIA->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$CATEGORIA->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

