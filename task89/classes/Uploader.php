<?php

class Uploader
{
    // имя поля формы, от которого мы ожидаем загрузку файла
    protected $fieldFile;

    public function __construct($fieldFile)
    {
        $this->fieldFile = $fieldFile;
    }

    public function isUploaded() {
        if (isset($_FILES[$this->fieldFile]) && !empty($_FILES[$this->fieldFile])) {
            if (0 == $_FILES[$this->fieldFile]['error']) {
                return true;
            }
            return false;
        }

    }

    public function upload() {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->fieldFile]['tmp_name'], __DIR__.'/../img/'.$_FILES[$this->fieldFile]['name']);
        }
    }

}
