<?php require_once __DIR__ . '/Gestbook.php';

$Chat = new Gestbook('messages',$_POST['name']);
if (isset($_POST['name']) && isset($_POST['mess']))
    if ((strlen($_POST['name']) > 0) && (strlen($_POST['mess'])>0))
    {
        $Chat->append($_POST['mess']);
        $Chat->save();
    }
?>

В процессе разработки....
<br>
<?php echo $_POST['name']." Hello!" ?>
<br>
<style>
    .chat{
        border-style: solid;
        border-width: 2px;
        padding: 10px;
    }
    #name{
        border: 0px;
    }
    #mess{
        width: 50pc;
    }
</style>
<div class ='chat'>
    <?php $Chat->outData()?>
</div>

<form action="/lesson04/chat.php" method="POST">
    <br>
    Введите сообщение: <input type='text' id="name" name='name' readonly='' value='<?php echo $Chat->User ?>'>
    <br>
    <input type='text'  id="mess" name='mess'>
    <br>
    <button type="submit">Отправить</button>
</form>

<a href="index.php">НА ГЛАВНУЮ</a>
