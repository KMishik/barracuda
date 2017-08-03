<?php

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
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
		try {

			$this->router->add('home', '/', 'HomeController:index');
			$this->router->add('news', '/news', 'HomeController:news');
			$this->router->add('news_single', '/news/(id:int)', 'HomeController:news_single');

			$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

			if ($routerDispatch == null)
			{
				$routerDispatch = new DispatchedRoute('ErrorController:page404');
			}

			list($class, $action) = explode(':', $routerDispatch->getController(), 2);

			$controller = '\\Cms\\Controller\\' . $class;

			$parameters = $routerDispatch->getParameters();

			call_user_func_array([new $controller($this->di), $action], $parameters);

		} catch ( \Exception $e ) {

			echo $e->getMessage();
			exit();

		}

		//print_r($_SERVER);
		//print_r($routerDispatch);
	}
}