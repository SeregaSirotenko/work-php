<?php
$myNews = [
            0 => [
                    'title' => 'Заголовок новости',
                    'description' => 'Содержимое новости',
                    'view' => 5,
                    'id' => 'Уникальный номер',
                    'date' => date("d-m-Y H:i:s"),
                    'comments' => [ 
                                    0 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария'],
                                    1 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария'],
                                    2 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария']]],        
            1 => [
                    'title' => 'Заголовок новости',
                    'description' => 'Содержимое новости',
                    'view' => 5,
                    'id' => 'Уникальный номер',
                    'date' => date("d-m-Y H:i:s"),
                    'comments' => [ 
                                    0 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария'],
                                    1 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария'],
                                    2 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария']]],
            2 => [
                    'title' => 'Заголовок новости',
                    'description' => 'Содержимое новости',
                    'view' => 5,
                    'id' => 'Уникальный номер',
                    'date' => date("d-m-Y H:i:s"),
                    'comments' => [ 
                                    0 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария'],
                                    1 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария'],
                                    2 => [
                                            'author' => 'Ник автора', 
                                            'date' => date("d-m-Y H:i:s"),
                                            'message' => 'Текст комментария']]]];
//echo '<pre>'; print_r($myNews);

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
        margin-left: 48px;
    }

    .myNews .newsItem .item .title{
        width: 160px;
    }

    .myNews .newsItem .item .news{
        margin: 0 auto;
        margin-top: 9px;
        height: 20px;
        text-align: center;
    }

    .myNews .newsItem .item .description{
        width: 180px;
    }
    
    .myNews .newsItem .item .view{
        width: 250px;
    }
    
    .myNews .newsItem .item .author{
        width: 520px;
    }

    .myNews .newsItem .item .comments{
        width: 155px;
    }

</style>
<div class="myNews">
<?php foreach ($myNews as $item): ?>
    <div class="newsItem">
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
<?php endforeach;?>
</div>
