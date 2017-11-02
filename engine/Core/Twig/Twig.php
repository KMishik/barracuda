<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 02.11.2017
 * Time: 14:58
 */

namespace Engine\Core\Twig;

use Twig_Environment;
use Twig_Loader_Filesystem;

class Twig
{

	/**
	 * @var Twig_Loader_Filesystem
	 */
	private $loader;
	/**
	 * @var Twig_Environment
	 */
  private $twig;



	public function __construct()
	{
		$templatePath = ROOT_DIR . '/content/themes/twig';
		$this->loader = new Twig_Loader_Filesystem($templatePath);
		$this->twig = new Twig_Environment($this->loader, array('cache' => $templatePath . '/cache'));
	}

}

