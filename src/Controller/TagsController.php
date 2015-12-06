<?php
// src/Controller/TagsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

// in order to use Articles_Tags table with query;
use Cake\ORM\TableRegistry;

class TagsController extends AppController
{
    public function index()
    {
        $tags = $this->Tags->find('all');
        $this->set(compact('tags'));		
		$loginuser = $this->Auth->user();
		$this->set(compact('loginuser'));
    }

    public function add($id = null)
    {
        $tag = $this->Tags->newEntity();
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
			
			$tag->article_id = $id;
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('The tag has been saved.'));
                return $this->redirect(['controller' => 'Tags', 'action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the tag.'));
        }
        $this->set('tag', $tag);
		
		$loginuser = $this->Auth->user();
		$this->set(compact('loginuser'));        
    }
	
	public function delete($id)
	{
		// check the tag which has been already used in the article
		$query = TableRegistry::get('Articles_Tags')
			->find()
			->where(['tag_id'=>$id])
			->first();
		
		if($query->id > 0){
			$this->Flash->error(__('Unable to delete tag since already tagged to Articles.'));
		}else{
			$this->request->allowMethod(['post', 'delete']);

			$tag = $this->Tags->get($id);
			if ($this->Tags->delete($tag)) {
				$this->Flash->success(__('The tag with id: {0} has been deleted.', h($id)));				
			}			
		}
		return $this->redirect(['controller' => 'Tags', 'action' => 'index']);	
	}

	public function edit($id = null)
	{

		$tag = $this->Tags->get($id);
		
		if ($this->request->is(['put'])) {
			
			$this->Tags->patchEntity($tag, $this->request->data);
			
			if ($this->Tags->save($tag)) {
				$this->Flash->success(__('Your tag has been updated.'));
				return $this->redirect(['controller' => 'Tags', 'action' => 'index']);
			}
			$this->Flash->error(__('Unable to update tag.'));
		}

		$this->set('tag', $tag);
		
		$loginuser = $this->Auth->user();
		$this->set(compact('loginuser'));		
	}		

	public function isAuthorized($user)
	{
		// Admin can access every action
		if (isset($user['role']) && $user['role'] === 'admin') {

			if (in_array($this->request->action, ['edit', 'delete'])) {
				$tagId = (int)$this->request->params['pass'][0];
				//return true;
			}			
			return true;
		}
		return parent::isAuthorized($user);
	}	
}