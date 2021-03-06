<?php

require_once __DIR__ . '/Article.php';

class News
{
    protected $path;
    protected $articles = [];

    public function __construct($path)
    {
        $this->path = $path;
        $articles = include $path;
        foreach ($articles as $value) {
            $this->articles[] = new Article($value);
        }
    }

    public function getAllArticles()
    {
        return $this->articles;
    }

    public function getOneArticle(int $id)
    {
        return $this->articles[$id];
    }

    public function countId($coundId)
    {
        return $coundId = count(include $this->path);
    }
}