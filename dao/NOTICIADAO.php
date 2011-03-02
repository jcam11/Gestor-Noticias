<?php include_once("lib/connection.php")?>
<?php 

 class NOTICIADAO{
 
    var $id;
    var $title;
    var $url;
    var $fecha_publicacion;
    var $fecha_ingreso;
    var $FUENTE;
    var $AUTOR;
    var $CATEGORIA;

/* -----    Getters and Setters ----------*/

    function set_id($id){
 		$this->id = $id;
    }

    function get_id(){
 		return $this->id;
    }

    function get_title(){
 		return $this->title;
    }
    
    function set_title($title){
	   $this->title = $title;    
    }    
    
    function get_url(){
 		return $this->url;
    }
    
    function set_url($url){
	   $this->url = $url;    
    }    
    
    function get_fecha_publicacion(){
 		return $this->fecha_publicacion;
    }
    
    function set_fecha_publicacion($fecha_publicacion){
	   $this->fecha_publicacion = $fecha_publicacion;    
    }    
    
    function get_fecha_ingreso(){
 		return $this->fecha_ingreso;
    }
    
    function set_fecha_ingreso($fecha_ingreso){
	   $this->fecha_ingreso = $fecha_ingreso;    
    }    
    
    function get_FUENTE(){
 		return $this->FUENTE;
    }
    
    function set_FUENTE($FUENTE){
	   $this->FUENTE = $FUENTE;    
    }    
    
    function get_AUTOR(){
 		return $this->AUTOR;
    }
    
    function set_AUTOR($AUTOR){
	   $this->AUTOR = $AUTOR;    
    }    
    
    function get_CATEGORIA(){
 		return $this->CATEGORIA;
    }
    
    function set_CATEGORIA($CATEGORIA){
	   $this->CATEGORIA = $CATEGORIA;    
    }    
    

    function update(){
    	$sql = "UPDATE NOTICIA SET title = '$this->title', url = '$this->url', fecha_publicacion = '$this->fecha_publicacion', fecha_ingreso = '$this->fecha_ingreso', FUENTE = '$this->FUENTE', AUTOR = '$this->AUTOR', CATEGORIA = '$this->CATEGORIA' WHERE id = '$this->id' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM NOTICIA WHERE id = ".$this->id;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO NOTICIA(title, url, fecha_publicacion, fecha_ingreso, FUENTE, AUTOR, CATEGORIA) VALUES('$this->title', '$this->url', '$this->fecha_publicacion', '$this->fecha_ingreso', '$this->FUENTE', '$this->AUTOR', '$this->CATEGORIA')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->id = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function NOTICIA_find_all(){
    $sql = "SELECT id, title, url, fecha_publicacion, fecha_ingreso, FUENTE, AUTOR, CATEGORIA FROM NOTICIA";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new NOTICIADAO(); 
    	
    	$pos = 0;
    	$obj->id = $row[$pos++];
    	$obj->title = $row[$pos++];
    	$obj->url = $row[$pos++];
    	$obj->fecha_publicacion = $row[$pos++];
    	$obj->fecha_ingreso = $row[$pos++];
    	$obj->FUENTE = $row[$pos++];
    	$obj->AUTOR = $row[$pos++];
    	$obj->CATEGORIA = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function NOTICIA_find_by_id($id){
    $sql = "SELECT id, title, url, fecha_publicacion, fecha_ingreso, FUENTE, AUTOR, CATEGORIA FROM NOTICIA WHERE id = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new NOTICIADAO();

       $pos = 0;
       $obj->id = $row[$pos++];
       $obj->title = $row[$pos++];
       $obj->url = $row[$pos++];
       $obj->fecha_publicacion = $row[$pos++];
       $obj->fecha_ingreso = $row[$pos++];
       $obj->FUENTE = $row[$pos++];
       $obj->AUTOR = $row[$pos++];
       $obj->CATEGORIA = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
