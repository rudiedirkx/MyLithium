<?php

namespace app\controllers;

class HelloWorldController extends \lithium\action\Controller {

	public function index() {
		$this->render(array('layout' => false));
	}

	public function edit() {
		print_r(func_get_args());
	}

	public function to_string() {
		return "Hello World";
	}

	public function to_json() {
		$this->render(array('json' => 'Hello World'));
	}
}


