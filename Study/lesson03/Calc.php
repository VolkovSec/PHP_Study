<?php
if (isset($_POST['x']))
{
    $x = $_POST['x'];
}else
{
    $x = 0;
}

if (isset($_POST['y']))
{
    $y = $_POST['y'];
}else
{
    $y = 0;
}

if (isset($_POST['operation']))
{
    $operation = $_POST['operation'];
}else
{
    $operation = '+';
}
$res = '';
if ($x == '' || $y == '') {
    $res = 'Не заполнено одно из входных значений!';
} else {
    switch ($operation) {
        case '+':
            $res = $x + $y;
            break;
        case '-':
            $res = $x - $y;
            break;
        case '*':
            $res = $x * $y;
            break;
        case '/':
            if (!$y == 0) {$res = $x / $y;}
            else $res = 'Error! Division by zero';
            break;
        case '^':
            $res = pow($x,$y);
            break;
    }
}

header('Location: http://localhost/lesson03/'.'?x='.$x.'&y='.$y.'&res='.$res);
?>
