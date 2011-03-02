<?php include_once("dao/FUENTEDAO.php")?>
<?php
  $result = FUENTE_find_all();
?>

<table border="1" style="border-collapse:collapse;">
 <tr>
   <th>id</th>
  <th>fuente</th>
  <th>Options</th>
 </tr>
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>
      <tr>
       <td><?php echo $result[$i]->get_id(); ?></td>              
       <td><?php echo $result[$i]->get_fuente(); ?></td>
       <td>
        <a href="FUENTE_edit.php?id=<?=$result[$i]->get_id()?>">Edit</a>
        <a href="FUENTE_do_delete.php?id=<?=$result[$i]->get_id()?>">Delete</a>
        <a href="FUENTE_details.php?id=<?=$result[$i]->get_id()?>">Details</a>  
       </td>    
      </tr>
<?php }
 ?>
</table>
<br/>
<a href="FUENTE_insert.php">New</a>