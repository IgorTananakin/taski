<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>

<div>
    <div class="">
        <h1 class="">Новости</h1>
        <p class="">Новости IT</p>
    </div>

    <div>
        <div>
            <?php
            foreach ($this->data['articles'] as $article) {
                ?>

                <div>
                    <h2><a href="/task7/article.php?id=<?php echo $article->getArticle()['id'] ?>">
                            <?php echo $article->getArticle()['news_title']; ?></a></h2>
                    <p><?php echo $article->getArticle()['news_date']; ?> by
                        <a href="#"><?php echo $article->getArticle()['news_author']; ?></a></p>
                    <p><?php echo $article->getArticle()['news_text']; ?>...</p>
                </div>
            <?php } ?>
        </div>
</div>





</body>
</html>