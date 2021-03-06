<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class UsersController extends AppController {
	public function index2() {
		$this->set ( 'title', 'Accueil des utilisateurs' );
	}
	public function login() {
		if ($this->request->is ( 'post' )) {
			$User = $this->Auth->identify ();
			if ($User) {
				
				$this->Auth->setUser ( $User );
				return $this->redirect ( $this->Auth->redirectUrl () );
			} else {
				$this->Flash->error ( __ ( "Adresse mail ou mot de passe incorrect, essayez à nouveau." ) );
			}
		}
	}
	public function ajouter() {
		$this->set ( 'title', 'Ajouter un nouvel utilisateur' );
		$User = $this->Users->newEntity ();
		if ($this->request->is ( 'post' )) {
			$User = $this->Users->patchEntity ( $User, $this->request->data );
			if ($this->Users->save ( $User )) {
				$this->layout = 'flash';
				$this->Flash->success ( __ ( "Utilisateur sauvegardé." ) );
				return $this->redirect ( [ 
						'action' => 'index' 
				] );
			}
			$this->Flash->error ( __ ( "Impossible d'ajouter l'utilisateur." ) );
		}
		$this->set ( 'User', $User );
	}
	public function logout() {
		$this->set ( 'title', 'Authentification' );
		return $this->redirect ( $this->Auth->logout () );
	}
	public function modifier($id = null) {
		$this->set ( 'title', "Modifier l'utilisateur" );
		$User = $this->Users->get ( $id );
		if ($this->request->is ( [ 
				'post',
				'put' 
		] )) {
			$this->Users->patchEntity ( $User, $this->request->data );
			if ($this->Users->save ( $User )) {
				$this->layout = 'flash';
				$this->Flash->success ( __ ( 'modification effectuée.' ) );
				return $this->redirect ( [ 
						'action' => 'index' 
				] );
			}
			$this->Flash->error ( __ ( 'Impossible de modifier les informations.' ) );
		}
		
		$this->set ( 'User', $User );
	}
	public function index() {
		$this->set ( 'title', 'Tableau de bord' );
		$users = TableRegistry::get ( 'Users' );
		$query = $this->Users->find ();
		$query->select ( ['count' => $query->func ()->count ( '*' ) ] );
	
		$this->set ( 'UsersCount', $query );
		
		foreach ( $query as $row ) {
			echo $row->id;
			$this->set ( 'UsersCount', $row->count );
			//echo $row->password;
		}
	}
}

?>