<?php include_once("dao/NOTICIADAO.php")?>
<?php
  $NOTICIA = new NOTICIADAO();
  
  if(isset($_POST["title"])) $NOTICIA->set_title( $_POST["title"] );
  if(isset($_POST["url"])) $NOTICIA->set_url( $_POST["url"] );
  if(isset($_POST["fecha_publicacion"])) $NOTICIA->set_fecha_publicacion( $_POST["fecha_publicacion"] );
  if(isset($_POST["fecha_ingreso"])) $NOTICIA->set_fecha_ingreso( $_POST["fecha_ingreso"] );
  if(isset($_POST["FUENTE"])) $NOTICIA->set_FUENTE( $_POST["FUENTE"] );
  if(isset($_POST["AUTOR"])) $NOTICIA->set_AUTOR( $_POST["AUTOR"] );
  if(isset($_POST["CATEGORIA"])) $NOTICIA->set_CATEGORIA( $_POST["CATEGORIA"] );

  $result = $NOTICIA->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$NOTICIA->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

