<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
------------------------------------------------------------------------------------------
<H2>Задание 1. Доработайте калькулятор:</H2>
------------------------------------------------------------------------------------------
<form action="Calc.php" method="post">
    <input type="number" name="x">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="^">^</option>
    </select>
    <input type="number" name="y">
    <button type="submit"> = </button>
</form>
<br>
<?php
session_start();
if (isset($_SESSION['res'])){
    echo  'Ответ: '.$_SESSION['res'];
}
else {
    $_SESSION['res'] = '';
}
unset( $_SESSION['res']);
session_write_close();
?>
