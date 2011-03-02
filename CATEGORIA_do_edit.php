<?php include_once("dao/CATEGORIADAO.php")?>
<?php
  $id = $_POST["id"];
  $CATEGORIA = new CATEGORIADAO();
  
  if(isset($_POST["id"])) $CATEGORIA->set_id( $_POST["id"] );
  if(isset($_POST["categoria"])) $CATEGORIA->set_categoria( $_POST["categoria"] );

  $result = $CATEGORIA->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$CATEGORIA->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

