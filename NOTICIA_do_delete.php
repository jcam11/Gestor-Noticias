<?php include_once("dao/NOTICIADAO.php")?>
<?php
  $id = $_GET["id"];
  
  $NOTICIA = NOTICIA_find_by_id($id);  
  $result = $NOTICIA->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$NOTICIA->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

