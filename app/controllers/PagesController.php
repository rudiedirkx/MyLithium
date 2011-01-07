<?php

namespace app\controllers;

class PagesController extends \lithium\action\Controller {

	public function view() {
		$path = func_get_args();
echo '<pre>'; print_r($path); exit;

		if (empty($path)) {
			$path = array('home');
		}
		$this->render(array('template' => join('/', $path)));
	}
}


