#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

//require "TestCommand.php";

use Symfony\Component\Console\Application;


spl_autoload_register(function($className){

	$tmp = explode("\\", $className);
	$fileName = $tmp[count($tmp)-1];

	require "{$fileName}.php";
});


$application = new Application();

// ... register commands


$application->add(new bin\TestCommand());
$application->add(new bin\FixCommand());


$application->run();
