<?php

class Article
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;

    }

    public function getArticle()
    {
        return $this->text;
    }
}