<?php
$name = "taro";
$pw = "pass";

if ($name = "taro" && $pw = "pass") {
    echo 'ログイン成功です ';
} else ($name != "taro" && $pw = "pass"){
    echo '名前が間違っています。';
} else ($name = "taro" && $pw != "pass"){
    echo 'パスワードが間違っています。';
}else ($name != "taro" && $pw != "pass"){
    echo '入力情報が間違っています。';
}
?>