<?php include_once("lib/connection.php")?>
<?php 

 class AUTORDAO{
 
    var $id;
    var $autor;

/* -----    Getters and Setters ----------*/

    function set_id($id){
 		$this->id = $id;
    }

    function get_id(){
 		return $this->id;
    }

    function get_autor(){
 		return $this->autor;
    }
    
    function set_autor($autor){
	   $this->autor = $autor;    
    }    
    

    function update(){
    	$sql = "UPDATE AUTOR SET autor = '$this->autor' WHERE id = '$this->id' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM AUTOR WHERE id = ".$this->id;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO AUTOR(autor) VALUES('$this->autor')";
    	
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
 
 function AUTOR_find_all(){
    $sql = "SELECT id, autor FROM AUTOR";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new AUTORDAO(); 
    	
    	$pos = 0;
    	$obj->id = $row[$pos++];
    	$obj->autor = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function AUTOR_find_by_id($id){
    $sql = "SELECT id, autor FROM AUTOR WHERE id = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new AUTORDAO();

       $pos = 0;
       $obj->id = $row[$pos++];
       $obj->autor = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
