<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

class UsersController extends AppController {
	public function initialize() {
		parent::initialize ();
		$this->loadComponent ( 'Flash' ); // Charge le FlashComponent
		$this->loadComponent ( 'Paginator' );
		$this->loadComponent ( 'Auth', [ 
				'loginRedirect' => [ 
						'controller' => 'Accueil',
						'action' => 'index' 
				],
				'logoutRedirect' => [ 
						'controller' => 'Pages',
						'action' => 'display',
						'home' 
				] 
		] );
	}
	public function beforeFilter(Event $event) {
		parent::beforeFilter ( $event );
		// Permet aux Users de s'enregistrer et de se déconnecter.
		$this->Auth->allow ( [ 
				'ajouter' 
		] );
	}
	public function index() {
	}
	public function login() {
		$this->set ( 'title_for_layout', 'Authentification' );
		if ($this->request->is ( 'post' )) {
			$User = $this->Auth->identify ();
			if ($User) {
				
				$this->Auth->setUser ( $User );
				// ajouter la gestion des comptes inactifs
				return $this->redirect ( $this->Auth->redirectUrl () );
			} else {
				$this->Flash->error ( __ ( "Adresse mail ou mot de passe incorrect, essayez à nouveau." ) );
			}
		}
	}
	public function ajouter() {
		$this->set ( 'title_for_layout', 'Ajouter un nouvel utilisateur' );
		$User = $this->Users->newEntity ();
		if ($this->request->is ( 'post' )) {
			$User = $this->Users->patchEntity ( $User, $this->request->data );
			// forcer le role au nivau 1
			// $User->role = 'niveau1';
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
}

?>