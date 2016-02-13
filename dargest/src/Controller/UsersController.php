<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController {
	public function index() {
	}
	public function login() {
	}
	public function ajouter() {
		$this->set ( 'title_for_layout', 'Ajouter un nouvel utilisateur' );
		$User = $this->Users->newEntity ();
		//debug($User->username);debug($User->password);debug($User->prenom);
		if ($this->request->is ( 'post' )) {
			$User = $this->Users->patchEntity ( $User, $this->request->data );
			// forcer le role au nivau 1
			$User->role = 'niveau1';
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