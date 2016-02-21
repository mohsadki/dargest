<?php

namespace App\Controller;

use App\Controller\AppController;

class StatsController extends AppController {
	public function index() {
		$this->set ( 'title', 'Tableau de bord' );
	}
}

