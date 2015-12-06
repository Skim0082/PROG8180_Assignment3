<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        //$this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
			'authorize' => ['Controller'], // Added this line
            'loginRedirect' => [
                'controller' => 'Articles',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Articles',
                'action' => 'index'
            ]
        ]);
    }
	public function isAuthorized($user)
	{
		// Admin can access every action
		if (isset($user['role']) && $user['role'] === 'admin') {
			return true;
		}

		// Default deny
		return false;
	}	
	
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'display']);
    }
}
