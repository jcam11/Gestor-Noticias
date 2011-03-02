<?php include_once("dao/CATEGORIADAO.php")?>
<?php
  $result = CATEGORIA_find_all();
?>

<table border="1" style="border-collapse:collapse;">
 <tr>
   <th>id</th>
  <th>categoria</th>
  <th>Options</th>
 </tr>
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>
      <tr>
       <td><?php echo $result[$i]->get_id(); ?></td>              
       <td><?php echo $result[$i]->get_categoria(); ?></td>
       <td>
        <a href="CATEGORIA_edit.php?id=<?=$result[$i]->get_id()?>">Edit</a>
        <a href="CATEGORIA_do_delete.php?id=<?=$result[$i]->get_id()?>">Delete</a>
        <a href="CATEGORIA_details.php?id=<?=$result[$i]->get_id()?>">Details</a>  
       </td>    
      </tr>
<?php }
 ?>
</table>
<br/>
<a href="CATEGORIA_insert.php">New</a>