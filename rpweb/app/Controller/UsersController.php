<?php
class UsersController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}
	//---------------------------------------------------//
	public function afficher($qid = null) {
		if (!$qid) {
			throw new NotFoundException(__('Invalid question'));
		}

		$users = $this->User->findByid($qid);
		if (!$users) {
			throw new NotFoundException(__('Invalid question'));
		}
		$this->set('users', $users);
		$this->set('title_for_layout', $users['User']['nom'].' '.$users['User']['prenom']);
		$this->log($users);
	}
	//---------------------------------------------------//
	public function lister() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
		$this->set('title_for_layout', 'La liste des utilisateurs');
		$this->log($this->User->findByid(1));

	}
	//---------------------------------------------------//
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User invalide'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
	//---------------------------------------------------//
	public function add() {
		$this->set('title_for_layout', 'Ajouter un nouveau utilisateur');
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Utilisateur sauvegardé'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Opération échouée'));
			}
		}
		//$this->loadModel('Fonction');
		$ListFonctions = $this->Fonction->find('list');
		$this->log($ListFonctions);
		$this->set('fonctions', $ListFonctions);
	}
	//---------------------------------------------------//
	public function edit($id = null) {
		$this->set('title_for_layout', 'Modifier le profil');
		$this->log($this->request->data);
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User Invalide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Modification éffectué'));
				$this->redirect(array('action' => 'lister'));
			} else {
				$this->Session->setFlash(__('La modification a échoué. Merci de réessayer.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
		$this->loadModel('Fonction');
		$ListFonctions = $this->Fonction->find('list');
		$this->log($ListFonctions);
		$this->set('fonctions', $ListFonctions);
	}
	//---------------------------------------------------//
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User invalide'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Suppression effectué'));
			$this->redirect(array('action' => 'lister'));
		}
		$this->Session->setFlash(__('Suppression échoué'));
		$this->redirect(array('action' => 'index'));
	}
	//---------------------------------------------------//
	public function login() {
		$this->set('title_for_layout', 'Identifiez vous');
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Nom utilisateur ou mot de passe invalide.'));
			}
		}
	}
	//---------------------------------------------------//
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

}
?>