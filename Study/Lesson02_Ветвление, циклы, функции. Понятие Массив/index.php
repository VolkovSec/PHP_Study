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
<H2>Задание 1. Решение квадратного уравнения</H2>
------------------------------------------------------------------------------------------

<H3>a*x <sup>2</sup> + b*x + c = 0</H3>
   <?php
        function discriminant($a, $b, $c)
        {
            return $d = $b*$b - 4*$a*$c;
        }
        $a = 1;
        $b = -70;
        $c = 600;
     ?>

    a = 1;  <br>
    b = -70; <br>
    c = 600; <br>
    <br>
    D = b<sup>2</sup>-4*a*c
    <br>
    <?php $d = discriminant($a,$b,$c); ?>
    D= <?php echo $d  ?>
    <br>
    <?php
        if ($d < 0)
        {
           ?> 'Корней нет'; <?php
        }
        elseif ($d == 0)
        {
            ?> x = <?php ;
            echo (-$b + sqrt($d))/(2*$a);
        }
        else
        {
            ?> X<sub>1</sub> = <?php ;
            echo (-$b - sqrt($d))/(2*$a) . '<br>';
            ?> X<sub>2</sub> = <?php ;
            echo (-$b + sqrt($d))/(2*$a);
        }
    ?>

    <br>
------------------------------------------------------------------------------------------
<H2>Задание 2. Что возвращает оператор include</H2>
------------------------------------------------------------------------------------------
<H4>В операторе include используется Return</H4>
<br>
<?php
$a = 'Hello';
$b = include __DIR__.'\ReturnVal.php';
?>
<br>
ReturnVal.php добавил к строке др. строку и вернул результат в Index.php :
<?php
echo $b;
?>
<br>
<H4>В операторе include не используется Return</H4>
<br>
<?php
$a = 'World' . '<br>';
$b = include __DIR__.'\NoReturnVal.php';
if ((bool)$b) ?> Файл успешно подключён <br> <?php ;
error_reporting(0);

if (!(bool)include __DIR__.'\NoFile.php') ?>  Файл НЕ подключон <br> <?php ;

?>
<br>

------------------------------------------------------------------------------------------
<H2>Задание 3. Угадай пол</H2>
------------------------------------------------------------------------------------------
<br>
    <?php
    function Get_sex($Name)
    {
        $Name_list = ['Клавдия'  => 'Женский' , 'Ольга'  => 'Женский' , 'Наталья'  => 'Женский' , 'Елена'  => 'Женский' , 'Алёна'  => 'Женский' , 'Анна'  => 'Женский' ,
                      'Ирина'  => 'Женский' , 'Нина'  => 'Женский' , 'Валентина'  => 'Женский' , 'Светлана'  => 'Женский' , 'Матрёна'  => 'Женский' , 'Марья'  => 'Женский' ,
                      'Андрей'  => 'Мужской' , 'Пётр'  => 'Мужской', 'Юрий'  => 'Мужской' , 'Артём'  => 'Мужской', 'Антон'  => 'Мужской' , 'Олег'  => 'Мужской' , 'Никита'  => 'Мужской' ,
                      'Дмитрий'  => 'Мужской' , 'Василий'  => 'Мужской' , 'Парфён'  => 'Мужской','Николай'  => 'Мужской' , 'Иван'  => 'Мужской' , 'Владимир'  => 'Мужской'];
        //var_dump($Name_list);
        if (array_key_exists($Name, $Name_list))
        {
            return $Name_list[$Name];
        }
        else return null;
    }
    $Name = 'Юрий';
    Echo Get_sex($Name);
    // var_dump(Get_sex($Name)); // Проверял, что возвращает null
    ?>
<br>
------------------------------------------------------------------------------------------
<H2>Задание 4. Частота буквы ё в массиве имён</H2>
------------------------------------------------------------------------------------------
<br>
<?php
$Name_list = ['Клавдия', 'Ольга', 'Наталья', 'Елена', 'Алёна', 'Анна',
    'Ирина' , 'Нина', 'Валентина', 'Светлана', 'МатрЁна', 'Марья',
    'Андрей', 'Пётр', 'Юрий', 'Артём', 'Антон', 'Олег', 'Никита',
    'Дмитрий', 'Василий', 'Парфён','Николай', 'Иван', 'Владимир'];

$a = array_reduce($Name_list, function($frequency, $item)
                            {
                                $frequency += strlen('ё')*substr_count(mb_strtolower($item), 'ё');  //Определяю сколько бит занимает символ и * на кол-во этих символов в строке
                                return $frequency;
                            }
                 ) . '<br>';

$b = array_reduce($Name_list, function($frequency, $item)
                            {
                                $frequency += strlen($item);  // Кол-во бит
                                return $frequency;
                            }
                 ) . '<br>';


echo ($a/$b);
?>

</body>
</html>