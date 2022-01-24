<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$price = htmlspecialchars($_POST["price"]);
$country = htmlspecialchars($_POST["country"]);
$hudi = htmlspecialchars($_POST["hudi"]);
$hudiArr = explode(",", $hudi);
$hudiAll = " ";
if (empty($_POST["promo"])) {
    $promo = "нет";
} else {
    $promo = htmlspecialchars($_POST["promo"]);
}

foreach ($hudiArr as $value) {
    $hudiAll = $hudiAll . "<li>$value</li>";
}

$address = "vvxxvv@ya.ru";
$sub = '=?utf-8?B?' . base64_encode('Новый заказ худи') . '?=';

$mes = "

<h1>Новый Заказ</h1>
<p>Имя клиента: $name </p>
<p>Электронный адрес: $email </p>
<p>Телефон: $country $tel </p>
<p>Промокод: $promo </p>
<p>Комплектация заказа: </p>
<ul>
$hudiAll
</ul>
<p>Финальная цена: $price </p>
<ul>
<li>Носишь худи оверсайз или классический с посадкой по фигуре? Выбери крой и длину, а затем добавь подходящие карманы.</li>
<li>Ты любишь капюшон на шнурках или на молнии? А может сразу два капюшона или капюшон с ушами зайца? Целых 11 вариантов на выбор!</li>
<li>Также ты настраиваешь обработку манжетов и низа худи.</li>
<li>Даже место вышивки Hooli можно настроить или сделать абсолютно любой принт за доплату (напиши менеджеру).</li>
<li>Ткань худи может быть легкая или утепленная с начесом.</li>
<li>У Hooli самый большой ассортимент палитры - 29 цветов. Если ты берешь худи в комплекте с джоггерами - это 841 различный вариант!</li>
<li>В конце ты указываешь свой размер и рост - и мы сошьем изделие по выбранным тобой параметрам!</li>
</ul>
";
$headers = "From: $name \r\n";
$headers .= 'Return-path: <' . $email . ">\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n\r\n";

if (mail($address, $sub, $mes, $headers)) {
    echo 'yes';
} else {
    echo 'no';
}
