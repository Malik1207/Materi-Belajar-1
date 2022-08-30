<?php
		
		for($i = 1; $i <= 10; $i++) {
		
				for ($b = 1; $b <=$i; $b++){
				echo "*";
				
				}
				
				echo "<br>";
				
		}
			
		$jumlah=10;

		for ($i=1; $i<=$jumlah; $i++){
		
			 for ($b=$jumlah; $b>=$i; $b-=1){
				  print(' &nbsp');
			 }
			 for ($c=1; $c<=$i; $c++){
				  echo '*';
			 }
			 echo "<br>";
			 
		}
		
		for ($i=1; $i<=$jumlah; $i++){
		
			 for ($b=$jumlah; $b>=$i; $b-=1){
				  print('&nbsp');
			 }
			 for ($c=1; $c<=$i; $c++){
				  echo '*';
			 }
			 echo "<br>";
			 
		}
		
		
		for ($i = 1; $i <= 5; $i++) {
		
			 for ($j = 1; $j <= $i ; $j++) {
			 echo $j;
			}
			
		echo '<br>';
		
		}
		
		for ($i = 1; $i <= 5; $i++) {
		
			 for ($j = 1; $j <= $i ; $j++) {
			 echo $j;
			}
			
		echo '<br>';
		
		}
		
		$i=5;
		while($i>=1){ 
		
		  for($i1=1;$i1<=$i;$i1++){
				echo $i1;
			 }
		  echo "<br>";
		  $i--;
		  
		} 
			
?>













