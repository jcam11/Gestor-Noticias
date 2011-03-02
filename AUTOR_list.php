<?php include_once("dao/AUTORDAO.php")?>
<?php
  $result = AUTOR_find_all();
?>

<table border="1" style="border-collapse:collapse;">
 <tr>
   <th>id</th>
  <th>autor</th>
  <th>Options</th>
 </tr>
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>
      <tr>
       <td><?php echo $result[$i]->get_id(); ?></td>              
       <td><?php echo $result[$i]->get_autor(); ?></td>
       <td>
        <a href="AUTOR_edit.php?id=<?=$result[$i]->get_id()?>">Edit</a>
        <a href="AUTOR_do_delete.php?id=<?=$result[$i]->get_id()?>">Delete</a>
        <a href="AUTOR_details.php?id=<?=$result[$i]->get_id()?>">Details</a>  
       </td>    
      </tr>
<?php }
 ?>
</table>
<br/>
<a href="AUTOR_insert.php">New</a>