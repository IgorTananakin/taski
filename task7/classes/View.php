<?php


class View   {

    protected $data = [];

    //метод сохранить данные
    public function assing($name, $value) {
        $this->data[$name] = $value;
        return $this;//вернул объект чтобы в файле index не обращаться как к объекту
    }

    //метод возвращает шаблон с данными
    public function display($template){
        foreach ($this->data as $dat) {
            ${$dat} = $dat;
        }
        //var_dump(${$dat});
        //extract($this->data);
        //подменяю имена name на переменные и обращаюсь уже к переменным массива
        include $template;
    }

    public function render($template){
        ob_start();
        require  $template;
        $content = ob_get_contents();//получаем содержимое буфера вывода
        ob_end_clean();//очистить буфер выывода
        return $content;
    }

}