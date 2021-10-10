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
    <div>
        <h1 >Новости</h1>
        <p >Новости IT.</p>
    </div>

    <div>
         <h2>
             <?php echo $this->data['articleOne']->getArticle()['news_title']; ?>
         </h2>
         <p>
             <?php echo $this->data['articleOne']->getArticle()['news_text']; ?>
         </p>
    </div>

    <footer>
        <p>
            <a href="/task7/news.php">Назад</a>
        </p>
    </footer>

</body>
</html>