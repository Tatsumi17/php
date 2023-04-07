<?php

$name=htmlspecialchars($_POST["name"],ENT_QUOTES);
$product=htmlspecialchars($_POST["product"],ENT_QUOTES);
$number=htmlspecialchars($_POST["number"],ENT_QUOTES);

echo "私の名前は".$name."です。<br />"."商品は".$product."です<br />"."注文数は".$number."です。";