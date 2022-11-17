<?php
$name = "taro";
$pw = "ss";

if ($name = true && $pw = true) {
    echo 'ログイン成功です ';
}
elseif ($name = false && $pw = true){
    echo '名前が間違っています';
}
elseif ($name = true && $pw = false){
    echo 'パスワードが間違っています';
}
elseif ($name = false && $pw = false){
    echo '入力情報が間違っています。';
}

?>