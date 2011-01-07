<?php

namespace app\controllers;

use \app\models\Model;

class ModelsController extends \lithium\action\Controller {

	public function index() {
		$models = Model::all();
		return compact('models');
	}

	public function view() {
		$model = Model::first($this->request->id);
		return compact('model');
	}

	public function add() {
		$model = Model::create();

		if (($this->request->data) && $model->save($this->request->data)) {
			$this->redirect(array('Models::view', 'args' => array($model->id)));
		}
		return compact('model');
	}

	public function edit() {
		$model = Model::find($this->request->id);

		if (!$model) {
			$this->redirect('Models::index');
		}
		if (($this->request->data) && $model->save($this->request->data)) {
			$this->redirect(array('Models::view', 'args' => array($model->id)));
		}
		return compact('model');
	}
}

?>