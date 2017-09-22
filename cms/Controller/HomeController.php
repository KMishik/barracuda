<?php

namespace Cms\Controller;


class HomeController extends CmsController
{
	public function index()
	{
		$vars = [
			"name" => "K.Mishik",
		];


		$this->view->render("home", $vars);
	}

	public function news()
	{
		echo "News Page";
	}

	public function news_single($id = 'no')
	{
		echo 'News' . ' ' . $id;
	}
}
