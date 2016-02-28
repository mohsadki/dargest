<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class StatsController extends AppController {
	public function index() {
		$this->set ( 'title', 'Tableau de bord' );
			$this->set ( 'title', 'Tableau de bord' );
		$users = TableRegistry::get ( 'Users' );
		$query = $users->find ();
		$query->select ( ['count' => $query->func ()->count ( '*' ) ] );
	
		$this->set ( 'UsersCount', $query );
		
		foreach ( $query as $row ) {
			echo $row->id;
			$this->set ( 'UsersCount', $row->count );
			$this->set ( 'UsersLabels', 'simoh');
			//echo $row->password;
		}
	}
}

