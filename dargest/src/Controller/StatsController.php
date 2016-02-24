<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class StatsController extends AppController {
	public function index() {
		$this->set ( 'title', 'Tableau de bord' );
		$users = TableRegistry::get ( 'Users' );
		$query = $users->find;
		//$query ()->select ( ['count' => $query->func ()->count ( '*' ) 	] );
		//$query->toArray ();
		// die($query);
		$this->set ( 'UsersCount', $query );
	}
}

