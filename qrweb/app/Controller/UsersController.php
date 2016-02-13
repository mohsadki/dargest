<?php

class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
		$this->Auth->allow('logout');
	}

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

	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('L\'user a été sauvegardé'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
			}
		}
	}

	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User Invalide'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('L\'user a été sauvegardé'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User invalide'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User supprimé'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('L\'user n\'a pas été supprimé'));
		$this->redirect(array('action' => 'index'));
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Nom utilisateur ou mot de passe invalide.'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

}
?>