<?php
// 例として、血液型を診断する条件分岐
$blood = 'B';
switch ($blood){
    case'A';
     print'A型です';
     break;
     case'B';
     print'B型です';
     break;
     case'O';
     print'O型です';
     break;
     case'AB';
     print'AB型です';
     break;
default:
  echo "A/B/O/ABから選択してください";
}
?>