<?php
if (isset($_POST['name']) && isset($_POST['mess']))
{
    // Открыли файл
   $data = file_get_contents(__DIR__ . '/data/messages.txt');
    // Разбили на массив по переносам строк
   $lines = explode(PHP_EOL, $data);
    // Добавили в конец массива сообщение с Именем
   array_push($lines, '['.date("Y-m-d H:i:s").']'.$_POST['name'] . ': ' . $_POST['mess']);
   // Вернули из массива в файл предварительно разбив массив на строки
   file_put_contents(__DIR__ . '/data/messages.txt', implode(PHP_EOL,$lines));

}

header('Location: http://192.168.7.25/lesson03/gest_book.php'.'?name='.$_POST['name']);
?>