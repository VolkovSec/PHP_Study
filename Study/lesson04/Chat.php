<style>
    .chat{
        border-style: solid;
        border-width: 2px;
        padding: 10px;
    }
    #name{
        border-width: 0px;
    }
    #mess{
        width: 50pc;
    }
</style>
<div class ='chat'>

</div>

<form action="chat.php" method="post">
    <br>
    Введите сообщение: <input type='text' id="name" name='name' readonly='' value='<?php echo $_GET['name'] ?>'>
    <br>
    <input type='text'  id="mess" name='mess'>
    <br>
    <button type="submit">Отправить</button>
</form>

<a href="index.php">НА ГЛАВНУЮ</a>
