<?php
/*$a1 = 10;
$a2 = 5;
$a3 = $a1 * $a2;
echo $a3.', ';

if ($a3 == 50) { 

	echo "50"; 
} else if ($a3 > 50) {
	echo "0";
} else {

 echo "100";	
}

$q1 = true;
$q2 = false;
*/


$white = rand(1, 9);
echo $white.'<br>'; 
if ($white == 2 or $white == 5) {
	echo 'У меня всё получилось'; 
}
echo '<hr>';
for ($i==1; $i<$white; $i++) {
	echo $i.'<br>'
}

?>
