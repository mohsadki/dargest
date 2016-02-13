<?php
namespace App\Controller;

use App\Controller\AppController;

class MarchesController extends AppController
{
	public function index()
	{

	}

	public function ajouter()

	{
		$this->set('title_for_layout', 'Ajouter un nouveau marché');
		$Marche = $this->Marches->newEntity();
		if ($this->request->is('post')) {
			$Marche = $this->Marches->patchEntity($Marche, $this->request->data);
			//forcer le role au nivau 1
			$Marche->categorie='eqp';
			if ($this->Marches->save($Marche)) {
				$this->layout = 'flash';
				$this->Flash->success(__("Marché sauvegardé."));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__("Impossible d'ajouter le marché."));
		}
		$this->set('Marche', $Marche);
	}

	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Flash'); // Charge le FlashComponent
		$this->loadComponent('Paginator');
		$this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Accueil',
                'action' => 'index'
                ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
                ]
                ]);
	}
	public function lister()
	{
		$this->set('title_for_layout', 'La liste des marchés');
		$this->set('utilisateurs', $this->paginate());
	}
}

?>