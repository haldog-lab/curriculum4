<?php
$fruits = ["apple" => 100, "orange" => 50, "peach" => 600];
$num = [3,3,5];
function getprice($fruits,$num){
   $getprice = $fruits * $num ;

   return $getprice;
}
$i = 0;
foreach ($fruits as $key => $value) {

    echo $key."は".getprice($value,$num[$i])."円です。";
    <br>
    $i++;
    
}


?>

