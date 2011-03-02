<?php include_once("dao/AUTORDAO.php")?>
<?php
  $id = $_POST["id"];
  $AUTOR = new AUTORDAO();
  
  if(isset($_POST["id"])) $AUTOR->set_id( $_POST["id"] );
  if(isset($_POST["autor"])) $AUTOR->set_autor( $_POST["autor"] );

  $result = $AUTOR->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$AUTOR->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

