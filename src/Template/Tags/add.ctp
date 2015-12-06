<!-- src/Template/Tags/add.ctp -->
<div id="logout">
	<?php
		if($loginuser['id'] != null){
			if($loginuser['role'] == 'admin'){
				echo $this->Html->link('Tag list', ['controller' => 'Tags', 'action' => 'index']); 
				echo " | ";
			}
			echo $this->Html->link('Log Out', ['controller' => 'Users', 'action' => 'logout']); 
		}else{
			echo $this->Html->link('Log In', ['controller' => 'Users', 'action' => 'login']);
		}
	?>
</div>
<div id="main">
	<?= $this->Form->create($tag) ?>
		<fieldset>
			<legend><?= __('Add Tag') ?></legend>
			<?= $this->Form->input('tag') ?>
	   </fieldset>
	<?= $this->Form->button(__('Save Tag')); ?>
	<?= $this->Form->end() ?>
</div>