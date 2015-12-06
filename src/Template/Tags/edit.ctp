<!-- File: src/Template/Tags/edit.ctp -->
<div id="logout">
	<?php
		if($loginuser['id'] != null){
			if($loginuser['role'] == 'admin'){
				echo $this->Html->link('Tag list', ['controller' => 'Tags', 'action' => 'index']); 
				echo " | ";				
				echo $this->Html->link('New Tag', ['controller' => 'Tags', 'action' => 'add']); 
				echo " | ";
			}
			echo $this->Html->link('Log Out', ['controller' => 'Users', 'action' => 'logout']); 
		}else{
			echo $this->Html->link('Log In', ['controller' => 'Users', 'action' => 'login']);
		}
	?>
</div>
<div id="main">
	<h1>Edit Tag</h1>
	<?php
		echo $this->Form->create($tag);
		echo $this->Form->input('tag');	
		echo $this->Form->button(__('Edit Tag'));
		echo $this->Form->end();
	?>
</div>