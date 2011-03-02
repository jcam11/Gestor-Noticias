<?php include_once("dao/CATEGORIADAO.php")?>
<?php
  $CATEGORIA = new CATEGORIADAO();
  
  if(isset($_POST["categoria"])) $CATEGORIA->set_categoria( $_POST["categoria"] );

  $result = $CATEGORIA->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$CATEGORIA->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

