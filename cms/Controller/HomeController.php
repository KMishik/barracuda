<?php

namespace Cms\Controller;


class HomeController extends CmsController
{
	public function index()
	{
		echo "Index Page";
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
