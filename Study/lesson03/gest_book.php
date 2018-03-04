<?php

function Get_mess($ChatName)
{
    $data = file_get_contents(__DIR__ . '/data/'.$ChatName.'.txt');
    return $lines = explode(PHP_EOL, $data);
}

?>
<style>
    .chat{
        border-style: solid;
        border-width: 2px;
        padding: 10px;
    }
</style>
<div class ='chat'>
    <?php
    $lines = Get_mess('messages');
    foreach ($lines as $line) {?>
        <article style='margin: 10px;'>
            <?php echo $line;  ?>
        </article>
    <?php  } ?>
</div>
<style>
    #name{
        border-width: 0px;
    }
    #mess{
        width: 50pc;
    }
</style>
<form action="/lesson03/chat.php" method="post">
    <br>
    Введите сообщение: <input type='text' id="name" name='name' readonly='' value='<?php echo $_GET['name'] ?>'>
    <br>
    <input type='text'  id="mess" name='mess'>
    <br>
    <button type="submit">Отправить</button>
</form>

<a href="index.php">НА ГЛАВНУЮ</a>
<br>