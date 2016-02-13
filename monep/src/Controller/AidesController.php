<?php
namespace App\Controller;
use App\Controller\AppController;

class AidesController extends AppController
{

	public function index()
	{

	}
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Flash'); // Charge le FlashComponent
		$this->loadComponent('Paginator');
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