<?php include_once("dao/AUTORDAO.php")?>
<?php
  $AUTOR = new AUTORDAO();
  
  if(isset($_POST["autor"])) $AUTOR->set_autor( $_POST["autor"] );

  $result = $AUTOR->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$AUTOR->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

