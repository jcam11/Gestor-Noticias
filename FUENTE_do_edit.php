<?php include_once("dao/FUENTEDAO.php")?>
<?php
  $id = $_POST["id"];
  $FUENTE = new FUENTEDAO();
  
  if(isset($_POST["id"])) $FUENTE->set_id( $_POST["id"] );
  if(isset($_POST["fuente"])) $FUENTE->set_fuente( $_POST["fuente"] );

  $result = $FUENTE->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$FUENTE->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

