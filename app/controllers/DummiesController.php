<?php

namespace app\controllers;

use \app\models\Dummy;

class DummiesController extends \lithium\action\Controller {

	public function index() {
		$dummies = Dummy::all();
		return compact('dummies');
	}

	public function view() {
		$dummy = Dummy::first($this->request->id);
		return compact('dummy');
	}

	public function add() {
		$dummy = Dummy::create();

		if (($this->request->data) && $dummy->save($this->request->data)) {
			$this->redirect(array('Dummies::view', 'args' => array($dummy->id)));
		}
		return compact('dummy');
	}

	public function edit() {
		$dummy = Dummy::find($this->request->id);

		if (!$dummy) {
			$this->redirect('Dummies::index');
		}
		if (($this->request->data) && $dummy->save($this->request->data)) {
			$this->redirect(array('Dummies::view', 'args' => array($dummy->id)));
		}
		return compact('dummy');
	}
}

?>