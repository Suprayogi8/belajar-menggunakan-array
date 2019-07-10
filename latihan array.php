<?php
	$a = array();
	$a1 = array(1,2,3);
	$a2 = array("satu","dua","tiga");
	$a3 = array(1,"dua",3,"empat");
	
	// echo $a1;
	print_r($a1);
	
	array_push($a1,4); //menambahkan suatu array atau string
	
	print_r($a1);
	
	echo $a2[1]; 

?>





<!DOCTYPE html>
<html>
<body>
	<table border="1">
		<tr>
			<td>Key</td>
			<td>Value</td>
		</tr>
		<!-- loop -->
		<?php
			//count($array) => menghitung panjang array
			for($i=0; $i<count($a2); $i++){
			//code, show data from array to table
		?>		
				<tr>
					<td><?php echo $i?></td>
					<td><?php echo $a2[$i]?></td>
				</tr>
		<?php	
			
			}
		?>		
	</table>
</body>
</html>
	
	
	