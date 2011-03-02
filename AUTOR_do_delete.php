<?php include_once("dao/AUTORDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $AUTOR = AUTOR_find_by_id($id);  
  $result = $AUTOR->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$AUTOR->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

