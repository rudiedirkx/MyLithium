<?php

namespace app\controllers;

use app\models\Post;

class PostsController extends \lithium\action\Controller {

	public function index() {
		$posts = Post::all();
		return compact('posts');
	}

	public function show( $id ) {
		return 'show job # '.$id;
	}

	public function edit() {
		echo 'edit job';
	}

	public function add() {
		$success = false;

		if ($this->request->data) {
			$post = Post::create($this->request->data);
			$success = $post->save();
		}
		return compact('success');
	}

}


