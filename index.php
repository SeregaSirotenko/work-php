<?php
header("Content-type: text/html; charset=utf-8");

require 'lib.inc.php';

?>

<!DOCTYPE html>
<html>
 <head>
   <title>!DOCTYPE</title>
   <meta charset="utf-8">
   <link href="style.css" rel="stylesheet">
 </head>
 <body>
 
 </body> 
</html>

<div class="myNews">

    <?php foreach ($myNews as $item): ?>

        <div class="newsItem">
            <div class="newsCell cell">
                <div class="item">
                    <div class="title news">
                        <span><?= $item['title']; ?></span>
                    </div>
                </div>
                <div class="item">
                    <div class="description news">
                        <span><?= $item['description']; ?></span>
                    </div>
                </div>
                <div class="item">
                    <div class="view news">
                        <span>Просмотров: <?= $item['view']; ?></span>
                        <span>Комментариев: <?= count($item['comments']); ?></span>
                    </div>
                </div>
            </div>
            <div class="commentCell cell">

                <?php foreach ($item['comments'] as $value): ?>

                    <div class="item">
                        <div class="author news">
                            <span>Автор комментария: <?= $value['author']; ?></span>
                            <span>Дата комментария: <?= $value['date']; ?></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="comments news">
                            <span><?= $value['message']; ?></span>
                        </div>
                    </div>

                <?php endforeach;?>

            </div>
        </div>

    <?php endforeach;?>

</div>
