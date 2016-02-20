<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

	public function validationDefault(Validator $validator)
	{
		return $validator
		->notEmpty('username', "Le nom d'utilisateur est nécessaire")
		->notEmpty('prenom', 'Le prénom est nécessaire')
		->notEmpty('password', 'Le mot de passe est nécessaire');
	}

	protected function _setPassword($password)
	{
		return (new DefaultPasswordHasher)->hash($password);
	}

}


?>