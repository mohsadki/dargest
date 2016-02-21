<?php

namespace App\Controller;

use App\Controller\AppController;

class DepensesController extends AppController {
	public function ajouter() 

	{
		$this->set ( 'title', 'Ajouter une dépense' );
		$Depense = $this->Depenses->newEntity ();
		if ($this->request->is ( 'post' )) {
			$Depense = $this->Depenses->patchEntity ( $Depense, $this->request->data );
			if ($this->Depenses->save ( $Depense )) {
				$this->layout = 'flash';
				debug($this->type);
				$this->Flash->success ( __ ( "Dépense sauvegardée." ) );
				return $this->redirect ( [ 
						'action' => 'lister' 
				] );
			}
			$this->Flash->error ( __ ( "Impossible d'ajouter la dépense." ) );
		}
		$this->set ( 'Depense', $Depense );
	}

    public function lister()
    {
    	$this->set ( 'title', 'La liste des dépenses' );
    }}

?>