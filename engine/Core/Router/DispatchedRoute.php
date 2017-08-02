<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 02.08.2017
 * Time: 16:33
 */

namespace Engine\Core\Router;


class DispatchedRoute
{
	private $controller;
	private	$parameters;

	/**
	 * DispatchedRoute constructor.
	 *
	 * @param $controller
	 * @param array $parameters
	 */
	public function __construct($controller, $parameters = [])
	{
		$this->controller = $controller;
		$this->parameters = $parameters;
	}

	/**
	 * @return mixed
	 */
	public function getController()
	{
		return $this->controller;
	}

	/**
	 * @return array
	 */
	public function getParameters(): array
	{
		return $this->parameters;
	}
}