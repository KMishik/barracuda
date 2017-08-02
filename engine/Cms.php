<?php

namespace Engine;

use Engine\Helper\Common;

class Cms
{
	/**
	 * @var
	 */
	private $di;

	public $router;

	/**
	 * Cms constructor.
	 *
	 * @param $di
	 */
	public function __construct($di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}

	/**
	 *	Run Cms
	 */
	public function	run()
	{
		$this->router->add('home','/', 'HomeController:index');
		$this->router->add('product','/user/12', 'ProductController:index');

		$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

		//print_r($_SERVER);
		print_r($routerDispatch);
	}
}