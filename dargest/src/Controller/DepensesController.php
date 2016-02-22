<?php

namespace App\Controller;

use App\Controller\AppController;

class DepensesController extends AppController {
	// fixer le nbr d'elements dans les tableau a 8
	public $paginate = [ 
			'limit' => 8 
	];
	public function ajouter() 

	{
		$this->set ( 'title', 'Ajouter une dépense' );
		$Depense = $this->Depenses->newEntity ();
		if ($this->request->is ( 'post' )) {
			$Depense = $this->Depenses->patchEntity ( $Depense, $this->request->data );
			if ($this->Depenses->save ( $Depense )) {
				$this->layout = 'flash';
				$this->Flash->success ( __ ( "Dépense sauvegardée." ) );
				debug ( $Depense );
				return $this->redirect ( [ 
						'action' => 'lister' 
				] );
			}
			$this->Flash->error ( __ ( "Impossible d'ajouter la dépense." ) );
		}
		$this->set ( 'Depense', $Depense );
	}
	public function lister() {
		$this->set ( 'title', 'La liste des dépenses' );
		$this->set ( 'depenses', $this->paginate () );
	}
	public function modifier($id = null) {
		$this->set ( 'title', 'Modifier la dépense' );
		$Depense = $this->Depenses->get ( $id );
		debug ( $Depense );
		$this->Depenses->patchEntity ( $Depense, $this->request->data );
		$this->Flash->success ( __ ( "Dépense modifiée." ) );
	}
	public function supprimer($id = null) {
		$this->set ( 'title', 'Supprimer la dépense' );
		$Depense = $this->Depenses->get ( $id );
		$this->Depenses->delete ( $Depense );
		$this->Flash->success ( __ ( "Dépense supprimée." ) );
		return $this->redirect ( [ 
				'action' => 'lister' 
		] );
	}
	public function afficher($id = null) {
		$this->set ( 'title', 'Le détail de la dépense' );
		$Depense = $this->Depenses->get ( $id );
		$this->set ( 'Depense', $Depense );
		
	}
}

?>