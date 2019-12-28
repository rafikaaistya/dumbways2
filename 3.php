<?php 

function count_handshake($j)
{
	$k=0;
   for ($i=1; $i<$j; $i++) { 
		$k=$k+$i;	
	}
   return $k;
}
echo count_handshake(3);
?>