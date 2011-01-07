<?php

namespace app\controllers;

use \app\models\Oelze;

class OelzesController extends \lithium\action\Controller {

	public function index() {
		$oelzes = Oelze::all();
		return compact('oelzes');
	}

	public function view() {
		$oelze = Oelze::first($this->request->id);
		return compact('oelze');
	}

	public function add() {
		$oelze = Oelze::create();

		if (($this->request->data) && $oelze->save($this->request->data)) {
			$this->redirect(array('Oelzes::view', 'args' => array($oelze->id)));
		}
		return compact('oelze');
	}

	public function edit() {
		$oelze = Oelze::find($this->request->id);

		if (!$oelze) {
			$this->redirect('Oelzes::index');
		}
		if (($this->request->data) && $oelze->save($this->request->data)) {
			$this->redirect(array('Oelzes::view', 'args' => array($oelze->id)));
		}
		return compact('oelze');
	}
}

?>