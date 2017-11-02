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
	/**
	 * @var
	 */
  private $templatePath;



	public function __construct()
	{
		$this->templatePath = ROOT_DIR . '/content/themes/twig';
		$this->loader = new Twig_Loader_Filesystem($this->templatePath);
		$this->twig = new Twig_Environment($this->loader, array('cache' => $this->templatePath . '/cache'));
	}

	public function render( $template, $vars = [] ) {

		$templateName = $template . ".html.twig";

		if (!is_file($this->templatePath . "/" . $templateName)) {

			throw new \InvalidArgumentException (
				sprintf("TWIG template %s was not find in %s .", $template, $this->templatePath)
			);
		}

		extract ($vars);

		ob_start();
		ob_implicit_flush(0);

		try {

			$templateLoad = $this->twig->load($templateName);
			echo $templateLoad->render();

		} catch (\Exception $e) {

			ob_end_clean();
			throw $e;
		}

		echo ob_get_clean();
	}


}

