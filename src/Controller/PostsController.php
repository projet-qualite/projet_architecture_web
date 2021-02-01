<?php

namespace App\Controller;

class PostsController {

	public function show(){
		$htmlIndex = include('./src/View/article_view.php');

		return $htmlIndex;
	}

}
