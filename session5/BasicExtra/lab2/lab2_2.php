<?php
$num1 = rand(1,10);
$num2 = rand(1,10);
$num3 = rand(1,10);
  
echo "*****************<br/>";
echo "** $num1 ** $num2 ** $num3 **<br/>";
echo "*****************</br>";
 
# Write code here
$arr = [$num1, $num2, $num3];
if ( sizeof(array_unique($arr)) == 3){
    echo 'Try again!';
} else if (sizeof(array_unique($arr)) == 2 ){
    echo '2 of a kind';
} else {
    echo 'Jackpot!';
}
# End of code
?>
