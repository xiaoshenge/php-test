<?php
/**
 * Created by PhpStorm.
 * User: xiaoshenge
 * Date: 2017/7/8
 * Time: 下午11:37
 */

include "./vendor/autoload.php";

use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands

$application->add(new bin\TestCommand());
$application->add(new bin\FixCommand());


$application->run();