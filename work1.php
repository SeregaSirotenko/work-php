<?php
header("Content-type: text/html; charset=utf-8");
require 'lib.inc.php';
?>
<style>
    .myNews {
        width: 1067px;
        margin: 0 auto;
    }

    .newsItem {
        border: 3px solid red;
        margin: 0 auto;
        margin-top: 15px;
        width: 1000px;
    }

    .myNews .newsItem .item {
        height: 40px;
        width: 900px;
        border: 2px solid black;
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 24px;
    }

    .myNews .newsItem .newsCell .item .title{
        width: 170px;
    }

    .myNews .newsItem .item .news{
        margin: 0 auto;
        margin-top: 9px;
        height: 20px;
        text-align: center;
    }

    .myNews .newsItem .newsCell .item .description{
        width: 190px;
    }

    .myNews .newsItem .newsCell .item .view{
        width: 260px;
    }

    .myNews .newsItem .commentCell .item .author{
        width: 530px;
    }

    .myNews .newsItem .commentCell .item .comments{
        width: 165px;
    }

    .myNews .newsItem .cell{
        border: 2px solid green;
        width: 950px;
        margin: 0 auto;
        margin-top: 12px;
    }

    .myNews .newsItem .commentCell{
        margin-bottom: 12px;
    }

</style>
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
