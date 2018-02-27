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
session_start();
if (isset($_SESSION['res'])){
    echo  $_SESSION['res'] = $res;
}

header('Location: http://localhost/lesson03/');
