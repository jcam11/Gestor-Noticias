<?php include_once("dao/FUENTEDAO.php")?>
<?php
  $FUENTE = new FUENTEDAO();
  
  if(isset($_POST["fuente"])) $FUENTE->set_fuente( $_POST["fuente"] );

  $result = $FUENTE->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$FUENTE->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

