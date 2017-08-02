<?php

/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 02.08.2017
 * Time: 17:23
 */

namespace Engine\Helper;

class Common
{
	/**
	 * @return bool
	 */
	public static function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] = 'POST')
		{
			return true;
		}

		return false;
	}

	/**
	 * @return bool
	 */
	public static function isGet()
	{
		if ($_SERVER['REQUEST_METHOD'] = 'GET')
		{
			return true;
		}

		return false;
	}

	/**
	 * @return mixed
	 */
	public static function getMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	/**
	 * @return bool|string
	 */
	public static function getPathUrl()
	{
		$pathUrl = $_SERVER['REQUEST_URI'];

		if ($position = strpos($pathUrl, '?'))
		{
			$pathUrl = substr($pathUrl, 0, $position);
		}

		return $pathUrl;
	}
}