<?php

namespace Cms\Controller;

use Engine\Controller;
use Engine\DI\DI;


/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 03.08.2017
 * Time: 12:24
 */
class CmsController extends Controller
{
	/**
	 * HomeController constructor.
	 *
	 * @param \Engine\DI\DI $di
	 */
	public function __construct(DI $di)
	{
		parent::__construct($di);
	}

}
