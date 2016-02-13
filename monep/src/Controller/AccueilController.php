<?php
namespace App\Controller;
use App\Controller\AppController;

class AccueilController extends AppController {
	public function index()

	{
		$this->set('title_for_layout', 'Accueil');
		$this->set('UserName', $this->request->session()->read('User.username'));
		$this->set('UserId', $this->request->session()->read('User.id'));
	}
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Accueil',
                'action' => 'index'
                ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
                ]
                ]);
	}
}
?>