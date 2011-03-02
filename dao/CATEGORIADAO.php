<?php include_once("lib/connection.php")?>
<?php 

 class CATEGORIADAO{
 
    var $id;
    var $categoria;

/* -----    Getters and Setters ----------*/

    function set_id($id){
 		$this->id = $id;
    }

    function get_id(){
 		return $this->id;
    }

    function get_categoria(){
 		return $this->categoria;
    }
    
    function set_categoria($categoria){
	   $this->categoria = $categoria;    
    }    
    

    function update(){
    	$sql = "UPDATE CATEGORIA SET categoria = '$this->categoria' WHERE id = '$this->id' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM CATEGORIA WHERE id = ".$this->id;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO CATEGORIA(categoria) VALUES('$this->categoria')";
    	
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
 
 function CATEGORIA_find_all(){
    $sql = "SELECT id, categoria FROM CATEGORIA";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new CATEGORIADAO(); 
    	
    	$pos = 0;
    	$obj->id = $row[$pos++];
    	$obj->categoria = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    //return $resp;   
 }

 function CATEGORIA_find_by_id($id){
    $sql = "SELECT id, categoria FROM CATEGORIA WHERE id = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new CATEGORIADAO();

       $pos = 0;
       $obj->id = $row[$pos++];
       $obj->categoria = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
