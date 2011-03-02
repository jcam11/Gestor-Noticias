<?php include_once("dao/NOTICIADAO.php")?>
<?php
  $id = $_GET["id"];  
  $NOTICIA = NOTICIA_find_by_id($id); 
?>

<form method="post" action="NOTICIA_do_edit.php">

 <div>
  <div>
   <div>title</div>
   <div><input name="title" value="<?php echo $NOTICIA->get_title(); ?>"/></div>   
  </div> 
  
  <div>
   <div>url</div>
   <div><input name="url" value="<?php echo $NOTICIA->get_url(); ?>"/></div>   
  </div> 
  
  <div>
   <div>fecha_publicacion</div>
   <div><input name="fecha_publicacion" value="<?php echo $NOTICIA->get_fecha_publicacion(); ?>"/></div>   
  </div> 
  
  <div>
   <div>fecha_ingreso</div>
   <div><input name="fecha_ingreso" value="<?php echo $NOTICIA->get_fecha_ingreso(); ?>"/></div>   
  </div> 
  
  <div>
   <div>FUENTE</div>
   <div><input name="FUENTE" value="<?php echo $NOTICIA->get_FUENTE(); ?>"/></div>   
  </div> 
  
  <div>
   <div>AUTOR</div>
   <div><input name="AUTOR" value="<?php echo $NOTICIA->get_AUTOR(); ?>"/></div>   
  </div> 
  
  <div>
   <div>CATEGORIA</div>
   <div><input name="CATEGORIA" value="<?php echo $NOTICIA->get_CATEGORIA(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


