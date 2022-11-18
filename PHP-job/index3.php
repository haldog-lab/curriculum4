<?php
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
$fruits["peach"] = "もも";
// りんごを出力
echo $fruits["apple"];
// みかんを出力
echo $fruits["orange"];
// ぶどうを出力
echo $fruits["grape"];
echo $fruits["peach"];

var_dump($fruits);
?>
