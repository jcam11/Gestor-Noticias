<?php include_once("lib/connection.php")?>
<?php 

 class FUENTEDAO{
 
    var $id;
    var $fuente;

/* -----    Getters and Setters ----------*/

    function set_id($id){
 		$this->id = $id;
    }

    function get_id(){
 		return $this->id;
    }

    function get_fuente(){
 		return $this->fuente;
    }
    
    function set_fuente($fuente){
	   $this->fuente = $fuente;    
    }    
    

    function update(){
    	$sql = "UPDATE FUENTE SET fuente = '$this->fuente' WHERE id = '$this->id' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM FUENTE WHERE id = ".$this->id;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO FUENTE(fuente) VALUES('$this->fuente')";
    	
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
 
 function FUENTE_find_all(){
    $sql = "SELECT id, fuente FROM FUENTE";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new FUENTEDAO(); 
    	
    	$pos = 0;
    	$obj->id = $row[$pos++];
    	$obj->fuente = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function FUENTE_find_by_id($id){
    $sql = "SELECT id, fuente FROM FUENTE WHERE id = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new FUENTEDAO();

       $pos = 0;
       $obj->id = $row[$pos++];
       $obj->fuente = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
