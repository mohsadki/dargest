<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

class UsersController extends AppController
{
	// fixer le nbr d'elements dans les tableau a 8
	public $paginate = ['limit' => 8 ];

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		// Permet aux Users de s'enregistrer et de se déconnecter.
		$this->Auth->allow(['ajouter', 'logout']);
	}
	public function login()
	{
		$this->set('title_for_layout', 'Authentification');
		if ($this->request->is('post')) {
			$User = $this->Auth->identify();
			debug($User);
			if ($User) {

				$this->Auth->setUser($User);
				// ajouter la gestion des comptes inactifs
				return $this->redirect($this->Auth->redirectUrl());
			}
			else{
				$this->Flash->error(__("Adresse mail ou mot de passe incorrect, essayez à nouveau."));
			}
		}
	}
	public function logout()

	{
		$this->set('title_for_layout', 'Authentification');
		return $this->redirect($this->Auth->logout());
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

	public function index()
	{
		$this->set('title_for_layout', 'Utilisateurs');
		$this->set('User', $this->Users->find('all'));
	}

	public function afficher($id)
	{
		$this->set('title_for_layout', 'Utilisateurs');
		if (!$id) {
			throw new NotFoundException(__('User non valide'));
		}

		$User = $this->Users->get($id);
		$this->set(compact('User'));
	}

	public function ajouter()
	{
		$this->set('title_for_layout', 'Ajouter un nouvel utilisateur');
		$User = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$User = $this->Users->patchEntity($User, $this->request->data);
			//forcer le role au nivau 1
			$User->role='niveau1';
			if ($this->Users->save($User)) {
				$this->layout = 'flash';
				$this->Flash->success(__("Utilisateur sauvegardé."));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
		}
		$this->set('User', $User);
	}
	public function lister()
	{
		$this->set('title_for_layout', 'La liste des utilisateurs');
		$this->set('utilisateurs', $this->paginate());
	}
	public function edit($id = null)

	{
		$this->set('title_for_layout', "Modifier l'utilisateur");
		//recuperer les info depuis la table
		$User = $this->Users->get($id);
		$this->log($User);
		//alimentation des champs
		$this->request->data['username'] = $User['username'];
		$this->request->data['prenom'] = $User['prenom'];
		$this->request->data['email'] = $User['email'];
		$this->request->data['password'] = $User['password'];
		$this->request->data['role'] = $User['role'];
		$this->log($this->request->data);
		$this->log($User);
		if ($this->request->is(['post', 'put'])) {
			$this->Users->patchEntity($User, $this->request->data);
			$this->log("//test2//".$User->username);
			if ($this->Users->save($User)) {
				$this->layout = 'flash';
				$this->Flash->success(__('modification effectuée.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Impossible de modifier les informations.'));
		}

		$this->set('User', $User);
	}
	public function desactiver($id = null)
	{
		$User = $this->Users->get($id);
		$User['statut'] = "0";
		$this->Users->save($User);
		$this->redirect(['action' => 'lister']);
	}
	public function activer($id = null)
	{
		$User = $this->Users->get($id);
		$User['statut'] = "1";
		$this->Users->save($User);
		$this->redirect(['action' => 'lister']);
	}
	public function reinitialiser($id = null)
	{
		$User = $this->Users->get($id);
		$User['password'] = $User['username'];
		$this->Users->save($User);
		$this->redirect(['action' => 'lister']);
	}
}



?>

