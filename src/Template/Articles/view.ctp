<!-- File: src/Template/Articles/view.ctp -->

<h1><?= h($article->title) ?> by <?= $query->username?></h1>
<p>
This article was created by
<?php


?>
</p>

<p><?= h($article->body) ?></p>
<p>Created: <?= $article->created->format(DATE_RFC850) ?></p>

<p><?= $this->Html->link('Add Comment', ['controller'=>'Comments', 'action' => 'add', $article->id]) ?></p>