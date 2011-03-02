<?php include_once("dao/NOTICIADAO.php")?>
<?php
  $id = $_GET["id"];  
  $NOTICIA = NOTICIA_find_by_id($id); 
?>

 <div>
  <div>
   <div>title:</div>
   <div><?php echo $NOTICIA->get_title(); ?></div>   
  </div> 
  
  <div>
   <div>url:</div>
   <div><?php echo $NOTICIA->get_url(); ?></div>   
  </div> 
  
  <div>
   <div>fecha_publicacion:</div>
   <div><?php echo $NOTICIA->get_fecha_publicacion(); ?></div>   
  </div> 
  
  <div>
   <div>fecha_ingreso:</div>
   <div><?php echo $NOTICIA->get_fecha_ingreso(); ?></div>   
  </div> 
  
  <div>
   <div>FUENTE:</div>
   <div><?php echo $NOTICIA->get_FUENTE(); ?></div>   
  </div> 
  
  <div>
   <div>AUTOR:</div>
   <div><?php echo $NOTICIA->get_AUTOR(); ?></div>   
  </div> 
  
  <div>
   <div>CATEGORIA:</div>
   <div><?php echo $NOTICIA->get_CATEGORIA(); ?></div>   
  </div> 
  
 </div> 


