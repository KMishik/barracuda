<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 02.08.2017
 * Time: 16:18
 */

namespace Engine;


use Engine\DI\DI;

abstract class Controller
{

	/**
	 * @var \Engine\DI\DI
	 */
	protected $di;

	protected $db;

	protected $view;

	/**
	 * Controller constructor.
	 *
	 * @param DI $di
	 */
	public function __construct(DI $di)
	{
		$this->di = $di;
		$this->view = $this->di->get("view");
	}

}