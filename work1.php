<?php
$myNews = [
			0 => [
					'title' => 'Заголовок новости',
					'description' => 'Содержимое новости',
					'view' => 5,
					'id' => 'Уникальный номер',
					'date' => date("Y-m-d H:i:s"),
					'comments' => [ 
									0 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария'],
									1 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария'],
									2 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария']]],		
			1 => [
					'title' => 'Заголовок новости',
					'description' => 'Содержимое новости',
					'view' => 5,
					'id' => 'Уникальный номер',
					'date' => date("Y-m-d H:i:s"),
					'comments' => [ 
									0 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария'],
									1 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария'],
									2 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария']]],
			2 => [
					'title' => 'Заголовок новости',
					'description' => 'Содержимое новости',
					'view' => 5,
					'id' => 'Уникальный номер',
					'date' => date("Y-m-d H:i:s"),
					'comments' => [ 
									0 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария'],
									1 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария'],
									2 => [
											'author' => 'Ник автора', 
											'date' => date("Y-m-d H:i:s"),
											'message' => 'Текст комментария']]]];
//echo '<pre>'; print_r($myNews);

?>
<style>
	.myNews {
		width: 900px;
		margin: 0 auto;
	}

	.myNews .item {
		height: 40px;
		width: 900px;
		border: 2px solid black;
		margin-top: 15px;
	}

	.myNews .item .title{
		width: 140px;
	}

	.myNews .item .news{
		margin: 0 auto;
		margin-top: 9px;
		height: 20px;
	}

	.myNews .item .description{
		width: 160px;
	}
	
	.myNews .item .view{
		width: 230px;
	}
	
	.myNews .item .author{
		width: 500px;
	}

	.myNews .item .comments{
		width: 135px;
	}

</style>
<div class="myNews">
<?php foreach ($myNews as $item): ?>
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
<?php endforeach;?>
</div>
