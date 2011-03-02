<?php include_once("dao/NOTICIADAO.php")?>
<?php
  $result = NOTICIA_find_all();
?>

<table border="1" style="border-collapse:collapse;">
 <tr>
   <th>id</th>
  <th>title</th>
  <th>url</th>
  <th>fecha_publicacion</th>
  <th>fecha_ingreso</th>
  <th>FUENTE</th>
  <th>AUTOR</th>
  <th>CATEGORIA</th>
  <th>Options</th>
 </tr>
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>
      <tr>
       <td><?php echo $result[$i]->get_id(); ?></td>              
       <td><?php echo $result[$i]->get_title(); ?></td>
       <td><?php echo $result[$i]->get_url(); ?></td>
       <td><?php echo $result[$i]->get_fecha_publicacion(); ?></td>
       <td><?php echo $result[$i]->get_fecha_ingreso(); ?></td>
       <td><?php echo $result[$i]->get_FUENTE(); ?></td>
       <td><?php echo $result[$i]->get_AUTOR(); ?></td>
       <td><?php echo $result[$i]->get_CATEGORIA(); ?></td>
       <td>
        <a href="NOTICIA_edit.php?id=<?=$result[$i]->get_id()?>">Edit</a>
        <a href="NOTICIA_do_delete.php?id=<?=$result[$i]->get_id()?>">Delete</a>
        <a href="NOTICIA_details.php?id=<?=$result[$i]->get_id()?>">Details</a>  
       </td>    
      </tr>
<?php }
 ?>
</table>
<br/>
<a href="NOTICIA_insert.php">New</a>