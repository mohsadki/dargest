<?php
class User extends AppModel {
	public $hasOne = array('Fonction' => array(
            'className' => 'Fonction',
			'foreignKey' => 'id',
            'dependent' => false
	));
	public $name = 'User';
	public $validate = array(
	    'username' => array(
        'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Le nom utilisateur est requis'
                )
                ),
    	'prenom' => array(
        'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Le prenom utilisateur est requis'
                )
                ),
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'L\'adresse email est requise'
                )
                ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Le mot de passe est requis'
              
                )
                )
                );

                public function beforeSave($options = array()) {
                	if (isset($this->data[$this->alias]['password'])) {
                		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
                	}
                	return true;
                }
}

?>