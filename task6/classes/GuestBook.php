<?php

include __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{

    // Путь к файлу с данными
    protected $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;

        $this->data = file($fileName, FILE_IGNORE_NEW_LINES);//Не добавлять новую строку к концу каждого элемента массива
    }

    // Добавление к массиву данных
    public function append($text) {
        $this->data[] = trim($text);//убираем пробелы
    }

    public function save() {
        file_put_contents($this->fileName, implode("\n", $this->data));
        //записываем в файл и объединяем элементы массива в строку
    }


}
