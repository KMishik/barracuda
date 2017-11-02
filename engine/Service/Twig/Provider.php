<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 02.11.2017
 * Time: 14:48
 */
namespace Engine\Service\Twig;

use Engine\Service\AbstractProvider;
use Engine\Core\Twig\Twig;

class Provider extends AbstractProvider
{

	/**
	 * @var string
	 */
	private $serviceName = 'twig';

	/**
	 * @return mixed
	 */
	public function init()
	{
		$renderer = new Twig();
		$this->di->set($this->serviceName, $renderer);
	}
}

