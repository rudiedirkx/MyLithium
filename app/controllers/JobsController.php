<?php

namespace app\controllers;

class JobsController extends \lithium\action\Controller {

	public function index() {
		
	}

	public function show( $id ) {
		return 'show job # '.$id;
	}

	public function edit() {
		echo 'edit job';
	}

	public function add() {
		echo 'add job';
	}

}


