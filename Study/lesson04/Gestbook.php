<?php
//require_once __DIR__ . '/Gestbook.php';
class Gestbook
{
    protected $ChatPath;
    protected $Data;
    public $User;

    public function __construct($ChatPath, $User)
    {
        $this->ChatPath = $ChatPath;
        $this->User = $User;
        $this->Data = explode(PHP_EOL, file_get_contents(__DIR__ . '/data/' . $this->ChatPath . '.txt'));
    }

    public function getData()
    {
        return $this->Data;
    }

    public function append($text)
    {
        // Добавили в конец массива сообщение с Именем
        array_push($this->Data, '['.date("Y-m-d H:i:s").']'.$this->User . ': ' . $text);
    }
    public function save()
    {
        // Вернули из массива в файл предварительно разбив массив на строки
        file_put_contents(__DIR__ . '/data/'. $this->ChatPath . '.txt', implode(PHP_EOL, $this->Data));
    }

}
