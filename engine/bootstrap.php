<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;

try
{
	// Dependency injection
	$di = new DI();

	$di->set('test', ['test' => 'test_object']);
	$di->set('db', ['DB' =>'db_object']);

	$cms = new Cms($di);
	$cms->run();

}catch(\ErrorException $e)
{
	echo $e->getMessage();
}