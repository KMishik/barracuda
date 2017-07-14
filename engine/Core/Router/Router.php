<?php

namespace Engine\Core\Router;

class Router
{
	/**
	 * @var array
	 */
	private $routers = [];

	/**
	 * @var
	 */
	private $host;

	/**
	 * Router constructor.
	 *
	 * @param $host
	 */
	public function __construct($host)
	{
		$this->host = $host;
	}

	/**
	 * @param $key
	 * @param $pattern
	 * @param $controller
	 * @param string $method
	 */
	public function add($key, $pattern, $controller, $method = 'GET')
	{
		$this->routers[$key] = [
			'pattern'    => $pattern,
			'controller' => $controller,
			'method'     => $method
		];
	}
}