<?php
// src/Controller/CommentsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CommentsController extends AppController
{

    public function add($id = null)
    {
        $comment = $this->Comments->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->Comments->patchEntity($comment, $this->request->data);
			
			$comment->article_id = $id;
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));
                return $this->redirect(['controller' => 'Articles', 'action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('comment', $comment);
    }

}