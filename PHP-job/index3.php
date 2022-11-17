<?php
$name = "tao";
$pw = "ps";

if ($name == "taro" && $pw == "pass") {
    echo 'ログイン成功です ';
}
elseif ($name != "taro" && $pw == "pass"){
    echo '名前が間違っています';
}
elseif ($name == "taro" && $pw != "pass"){
    echo 'パスワードが間違っています';
}
elseif ($name != "taro" && $pw != "pass"){
    echo '入力情報が間違っています。';
}
?>
