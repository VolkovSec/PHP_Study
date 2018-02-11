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
    <H1>Hello World</H1>
    <?php
    $x = (true xor true);
    var_dump($x);
    var_dump(true xor true); // Результат: false

    $m   = 6075;
    $a   = 106;
    $b   = 1283;
    $x0  = 31;
    $x1  = (($a*$x0+$b) % $m);
    $x2  = (($a*$x1+$b) % $m);
    $x3  = (($a*$x2+$b) % $m);
    $x4  = (($a*$x3+$b) % $m);
    $x5  = (($a*$x4+$b) % $m);
    $x6  = (($a*$x5+$b) % $m);
    $x7  = (($a*$x6+$b) % $m);
    $x8  = (($a*$x7+$b) % $m);
    $x9  = (($a*$x8+$b) % $m);
    $x10 = (($a*$x9+$b) % $m);
    ?>
    <br>
    x1 = <?php echo $x1;?>
    <br>
    x2 =  <?php echo $x2; ?>
    <br>
    x3 =  <?php  echo $x3; ?>
    <br>
    x4 =  <?php  echo $x4; ?>
    <br>
    x5 =  <?php  echo $x5; ?>
    <br>
    x6 =  <?php  echo $x6; ?>
    <br>
    x7 =  <?php  echo $x7; ?>
    <br>
    x8 =  <?php  echo $x8; ?>
    <br>
    x9 =  <?php  echo $x9; ?>
    <br>
    x10 =  <?php  echo $x10; ?>
    <br>


</body>
</html>