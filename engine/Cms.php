<?php

namespace Engine;

class Cms
{
	/**
	 * @var
	 */
	protected $di;

	/**
	 * Cms constructor.
	 *
	 * @param $di
	 */
	public function __construct($di)
	{
		$this->di = $di;
	}

	/**
	 *	Run Cms
	 */
	public function	run()
	{
		echo "Привет BaRRaCuDa CMS! <br \>";

		$dep = $this->di->get('test');
		print_r($dep);
	}
}