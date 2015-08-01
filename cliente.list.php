

<table border="1">
<tr>
<th>Nome</th>
</tr>

   <?php foreach ($lc as $cli):?>
  <tr>  
    <td><?php echo $cli->nome_cliente;?></td>    
  </tr>
  <?php endforeach; ?>
</table>

