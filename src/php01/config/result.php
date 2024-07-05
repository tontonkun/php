<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は" . $name . "<br/>";

$merchandise = htmlspecialchars($_POST['merchandise'], ENT_QUOTES);
print "商品名は" . $merchandise . "<br/>";

$amount = htmlspecialchars($_POST['amount'], ENT_QUOTES);
print "注文数は" . $amount . "<br/>";