<?php
require_once __DIR__ . '/Uploader.php';
if (isset($_FILES[array_keys($_FILES)[0]]))
{
    $Data = new Uploader(array_keys($_FILES)[0]);
    if ($Data->isUploaded($_FILES))
    {
        $Data->upload($_FILES);
    }
    else echo $Data->Error;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="all_content">
    <div class="catalog_items clearfix">
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'] . '/lesson04/img/';
        $images = scandir($path);
        if (false !== $images) {
            $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images);
            foreach ($images as $image){?>
                <div class="catalog_item">
                    <?php echo '<img width="300" src="/lesson04/img/', htmlspecialchars(urlencode($image)),'" />'; ?>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<form action="/lesson04/Gallery.php" method="post" enctype="multipart/form-data">
    Выберите файл: <input type="file" name="picture">
    <br>
    <button type="submit" style="margin: 5px 5px 5px 5px;">Отправить</button>
</form>
<br>
<a href="index.php">НА ГЛАВНУЮ</a>
</body>