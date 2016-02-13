<?php
class QuestionsController extends AppController {
	public function index() {

	}

	public function Repondre($qid = null) {
		if (!$qid) {
			throw new NotFoundException(__('Invalid question'));
		}
	}
	public function Cloturer($qid = null) {
		if (!$qid) {
			throw new NotFoundException(__('Invalid question'));
		}
		else{
			$this->Question->updateAll(
			array('Question.statut' => '2','Question.datemaj' => date("'Y-m-d h:i:s'")),
			array('Question.id' => $qid));
		}
		$this->redirect(array('action' => 'Consulter'));
	}
	public function Poser() {

	}
	public function Envoyer() {
		//$refog = $this->User->findByid($this->Auth->user('id'));
		$this->request->data['Question']['id'] = $this->Auth->user('id');
		if ($this->Question->save($this->request->data)) {
			$this->redirect(array('action' => 'Consulter'));
		}
	}
	public function Consulter() {
		$questions = $this->paginate('Question');
		$this->set('questions', $questions);
	}
	public function Afficher($qid = null) {

		if (!$qid) {
			throw new NotFoundException(__('Invalid question'));
		}

		$questions = $this->Question->findByid($qid);
		if (!$questions) {
			throw new NotFoundException(__('Invalid question'));
		}
		$this->set('questions', $questions);

	}
	public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Question.datecreation' => 'Desc'
            )
            );

}