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
    <input type="number" name="x" VALUE=<?php echo $_GET['x'] ?> >
    <select name="operation" >
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="^">^</option>
    </select>
    <input type="number" name="y" VALUE=<?php echo $_GET['y'] ?>>
    <button type="submit"> = </button>
</form>
<br>
<?php
if (isset($_GET['res'])){
    echo  'Ответ: '.$_GET['res'];
}
else {
    $_GET['res'] = '';
}
unset( $_GET['res']);
unset( $_GET['x']);
unset( $_GET['y']);
?>
<br>

------------------------------------------------------------------------------------------
<H2>Задание 2. Делаем гостевую книгу:</H2>
------------------------------------------------------------------------------------------

</div>
<form action="/lesson03/gest_book.php" method="GET">
    <br>
    Введите Имя: <input type='text' name='name' VALUE='<?php echo $_GET['name'] ?>'>
    <button type="submit">Вход в чат</button>
</form>
<br>

------------------------------------------------------------------------------------------
<H2>Задание 3. Фотогалерея:</H2>
------------------------------------------------------------------------------------------
<br>
<a href="gallery.php">Галерея</a>

</body>
