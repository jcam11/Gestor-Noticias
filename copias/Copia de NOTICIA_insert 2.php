
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


<!--Calendar-->
	<link rel="stylesheet" href="CSS/jquery.ui.all.css">
	<script src="JavaScript/jquery-1.4.4.js"></script>
	<script src="JavaScript/jquery.ui.core.js"></script>
	<script src="JavaScript/jquery.ui.widget.js"></script>
	<script src="JavaScript/jquery.ui.datepicker.js"></script>
    <script>
	$(function() {
		$( "#fecha_publicacion" ).datepicker();
	});
	</script>
	<link rel="stylesheet" href="CSS/demos.css">
	

<!--<script src="jquery-1.3.2.min.js" type="text/javascript"><script>   -->
<body>

<form method="post" action="NOTICIA_do_insert.php">

 <div>
  <div>
   <div>Titulo</div>
   <div><input name="title"/></div>
  </div> 
  
  <div>
   <div>URL</div>
   <div><input name="url"/></div>
  </div> 
  
  <div>
   <div>Fecha de publicacion:</div>
   <div><input id="fecha_publicacion"  name="fecha_publicacion"/></div> 
   </div> 
  
  <div>
   <div>fecha_ingreso ----------------</div>
   <div><input name="fecha_ingreso"/></div>
  </div> 
  
  <div>
   <div>Fuente</div>
   <div><input name="FUENTE"/></div>
  </div> 
  
  <div>
   <div>Autor</div>
   <div><input name="AUTOR"/></div>
  </div> 
  
  <div>
  
   <div>Categoria</div>
   <div><input name="CATEGORIA"/></div>
  </div> 
  
  <div><input type="submit" value="Ingresar" /></div> 
 </div>

</form> 

</body>
</html>


