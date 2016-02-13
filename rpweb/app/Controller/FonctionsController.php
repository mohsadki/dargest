<?php
class FonctionsController extends AppController {
	public function index() {

	}
	public function lister() {
		$this->Fonction->recursive = 0;
		$this->set('fonctions', $this->paginate());
		$this->set('title_for_layout', 'La liste des fonctions');
	}
	public function add() {
		$this->set('title_for_layout', 'Ajouter une nouvelle fonction');
		if ($this->request->is('post')) {
			$this->Fonction->create();
			if ($this->Fonction->save($this->request->data)) {
				$this->Session->setFlash(__('Fonction ajouté'));
				$this->redirect(array('action' => 'lister'));
			} else {
				$this->Session->setFlash(__('Opération échouée'));
			}
		}
	}
	public function edit($id = null) {
		$this->set('title_for_layout', 'Modifier la fonction');
		$this->log('loooooooog'.$id);
		$this->Fonction->id = $id;
		$this->log('loooooooog'.$this->Fonction->libelle);
		if (!$this->Fonction->exists()) {
			throw new NotFoundException(__('Fonction Invalide'));
			$this->log('invalide');
		}
		//$this->log($this->request);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fonction->save($this->request->data)) {
				$this->Session->setFlash(__('Modification effectuée'));
				$this->redirect(array('action' => 'lister'));
				$this->log('ok');
			} else {
				$this->Session->setFlash(__('Modification échoué, Merci de réessayer.'));
				$this->log('ko');
			}
		}
		else {
			$this->log('gggggg');
			$this->request->data = $this->Fonction->read(null, $id);
			unset($this->request->data['Fonction']['libelle']);
		}
	}
	public function delete($id = null) {
		if (!$this->request->is('post')|| $this->request->is('put')) {
			throw new MethodNotAllowedException();
		}
		$this->Fonction->id = $id;
		if (!$this->Fonction->exists()) {
			throw new NotFoundException(__('Fonction invalide'));
		}
		if ($this->Fonction->delete()) {
			$this->Session->setFlash(__('Suppression effectué'));
			$this->redirect(array('action' => 'lister'));
		}
		$this->Session->setFlash(__('Suppression échoué'));
		$this->redirect(array('action' => 'index'));
	}
}
?>