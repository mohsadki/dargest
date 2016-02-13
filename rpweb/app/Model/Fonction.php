<?php
class Fonction extends AppModel {
	public $name = 'Fonction';

    public $validate = array(
	    'libelle' => array(
        'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Le libellé fonction est requis'
                )
                )
                );


}
?>