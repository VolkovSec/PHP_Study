<?php
class Uploader
{
    protected $InputName;
    public $Error;

    public function __construct($InputName)
    {
        $this->InputName = $InputName;
        $this->Error = null;
    }

    public function isUploaded($_F)
    {
        $img_types = ['jpeg','jpg','png','bmp'];
        $format =  substr($_F[$this->InputName]['type'], strpos($_F[$this->InputName]['type'], '/')+1,strlen($_F[$this->InputName]['type']));
        if (in_array(mb_strtolower($format), $img_types))
            if ($_F[$this->InputName]['error']==0)
                if ($_F[$this->InputName]['size'] <= 1048576)
                    return true;
                else
                {
                    $this->Error = 'Файл превышает размер 1МБ!';
                    return false;

                }
            else
            {
                $this->Error = 'Файл загружен с ошибками!';
                return false;
            }
        else
        {
            $this->Error = 'Допустимы только следующие расширения файлов \'jpeg\',\'jpg\',\'png\',\'bmp\'';
            return false;
        }
    }

    public function upload($_F)
    {
        move_uploaded_file($_F[$this->InputName]['tmp_name'],
                          __DIR__ . '/img/'.$_F[$this->InputName]['name']
                          );
    }

}