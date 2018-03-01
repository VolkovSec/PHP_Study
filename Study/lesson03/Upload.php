<?php
$img_types = ['jpeg','jpg','png','bmp'];
if (isset($_FILES['picture'])) {
    if ($_FILES['picture']['error'] == 0){
        if ($_FILES['picture']['size'] <= 1048576) {
            $format =  substr($_FILES['picture']['type'], strpos($_FILES['picture']['type'], '/')+1,strlen($_FILES['picture']['type']));
            if (in_array(mb_strtolower($format), $img_types)){
               move_uploaded_file(
                   $_FILES['picture']['tmp_name'],
                   __DIR__ . '/img/'.$_FILES['picture']['name']
               );
            }
        }

    }

}
header('Location: http://localhost/lesson03/gallery.php');
?>