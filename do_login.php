<?php include_once("lib/connection.php")?>
<?php 

$log = $_POST["log"];
$password = $_POST["pass"];

 $sql = "SELECT $login.getFieldsAsString() FROM $login.getTable().getName() WHERE $login.getLoginField() = '$log' AND $login.getPasswordField() = '$password' ";
 $link = getConnection();
 $result = mysql_query( $sql );
 
 if($row = mysql_fetch_array($result)){
    session_start(); 
   
    $index = 0;
    $_SESSION['logged'] = true;
    
    echo "Login successful. <a href='/'>Back</a>";   
 }
 else{
    echo "Could not find the login or password. <a href='login.php'>Back</a>";
 }
 
 mysql_close($link);     
?>
