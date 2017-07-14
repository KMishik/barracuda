<?php

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{

	/**
	 * @var string
	 */
	public $serviceName = 'router';

	/**
	 * @return mixed
	 */
	public function init()
	{
		$route = new Router('http://barracuda.cms/');
		$this->di->set($this->serviceName, $route);
	}
}