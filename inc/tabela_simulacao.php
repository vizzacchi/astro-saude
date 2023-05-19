<div class="tabela"> 
  <table width="800">
          <tr>
             <th scope="col" width="100">Faixa <br />Etátia</th>
             <th scope="col" width="100">Vidas</th>
<?php
 	  $qr = mysql_query($sql) or die(mysql_error());
	  while($ln = mysql_fetch_assoc($qr)){?>
		 
			<th scope="col" width="100"><?php echo $ln['plano'];?></th>
<?php }?> 
	   </tr>
<?php if($faixa1<>0 and $faixa1<>""){?>
<tr>
	<td>00 a 18</td>
	<td><?php echo $_POST['qtd0-18']; ?>	</td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){?>
	<td><?php echo number_format($ln['faixa1'], 2, ',', '.');?></td>
<?php
	 }?>
</tr>
 <?php }
if($faixa2<>0 and $faixa2<>""){?>
<tr>
<td>19 a 23</td>
<td><?php echo $_POST['qtd19-23']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){
		?>
<td><?php echo number_format($ln['faixa2'], 2, ',', '.'); ?></td>
	<?php }
?>
</tr>
 <?php }
 if($faixa3<>0 and $faixa3<>""){?>
<tr>
<td>24 a 28</td>
<td><?php echo $_POST['qtd24-28']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){ ?>
<td><?php echo number_format($ln['faixa3'], 2, ',', '.'); ?></td>
<?php
	 }?>
</tr>

 <?php }
 if($faixa4<>0 and $faixa4<>""){?>

<tr>
<td>29 a 33</td>
<td><?php echo $_POST['qtd29-33']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){ ?>
<td><?php echo number_format($ln['faixa4'], 2, ',', '.'); ?></td>
	<?php }
?>
</tr>
 <?php }
 if($faixa5<>0 and $faixa5<>""){?>

<tr>
<td>34 a 38</td>
<td><?php echo $_POST['qtd34-38']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){?>
<td><?php echo number_format($ln['faixa5'], 2, ',', '.');?></td>
	<?php
 }
 ?>
</tr>
 <?php }
 if($faixa6<>0 and $faixa6<>""){?>

<tr>
<td>39 a 43</td>
<td><?php echo $_POST['qtd39-43']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){ ?>
<td><?php echo number_format($ln['faixa6'], 2, ',', '.'); ?></td>
<?php	
	 }?>
</tr>
 <?php }
 if($faixa7<>0 and $faixa7<>""){?>

<tr>
<td>44 a 48</td>
<td><?php echo $_POST['qtd44-48']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){ ?>
<td><?php echo number_format($ln['faixa7'], 2, ',', '.'); ?></td>
<?php	
	 }?>
</tr>
 <?php }
 if($faixa8<>0 and $faixa8<>""){?>

<tr>
<td>49 a 53</td>
<td><?php echo $_POST['qtd49-53']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){ ?>
<td><?php echo number_format($ln['faixa8'], 2, ',', '.'); ?></td>
<?php	
	 }?>
</tr>
 <?php }
 if($faixa9<>0 and $faixa9<>""){?>

<tr>
<td>54 a 58</td>
<td><?php echo $_POST['qtd54-58']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){ ?>
<td><?php echo number_format($ln['faixa9'], 2, ',', '.'); ?></td>
<?php	
	 }?>
</tr>
 <?php }
 if($faixa10<>0 and $faixa10<>""){?>

<tr>
<td>59 a 99</td>
<td><?php echo $_POST['qtd59-100']; ?></td>
<?php	  
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){ ?>
<td><?php echo number_format($ln['faixa10'], 2, ',', '.'); ?></td>
<?php	
	 }?>
</tr>
 <?php }
?>

<tr class="tb-total">
<td>Total</td>
<td><?php echo $totvidas; ?></td>
<?php
	  $qr = mysql_query($sql) or die(mysql_error());
	  $num = mysql_num_rows($qr);


for ($_i=1;$_i<=$num;$_i++){
    mysql_data_seek($qr,$_i -1);
	$ln = mysql_fetch_assoc($qr);
	$tot = $_POST['qtd0-18'] * $ln['faixa1'] + $_POST['qtd19-23'] * $ln['faixa2'] + $_POST['qtd24-28'] * $ln['faixa3'] + $_POST['qtd29-33'] * $ln['faixa4'] + $_POST['qtd34-38'] * $ln['faixa5'] + $_POST['qtd39-43'] * $ln['faixa6'] + $$_POST['qtd44-48'] * $ln['faixa7'] + $_POST['qtd49-53'] * $ln['faixa8'] + $_POST['qtd54-58'] * $ln['faixa9'] + $_POST['qtd59-100'] * $ln['faixa10']; ?>
<td><?php	echo number_format($tot, 2, ',', '.'); ?></td>
<?php }
?>
</tr>
</table>

</div><!-- .tabela --> 