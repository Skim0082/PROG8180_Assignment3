<!-- File: src/Template/Articles/index.ctp -->

<h1>Blog articles</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
		<th>Author</th>
		<th>Comments</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->author->username ?>
        </td>
		<td>
		<?php foreach ($article -> comments as $comment){?>
			<ul>
				
				<li><?= $comment -> comment ?></li>
			</ul>
			<?php } ?>
		</td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>		
        <td>
		    <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
			<?= $this->Html->link('Log Out', ['controller' => 'Users', 'action' => 'logout']) ?>
        </td>		
    </tr>
    <?php endforeach; ?>
</table>