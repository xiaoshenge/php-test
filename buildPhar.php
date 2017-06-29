<?php
/**
 *
 *
 * @author: xiaoshenge
 * Date: 2017/6/29 18:19
 *
 */

$srcRoot = "./composer_test";
$buildRoot = "./build";

$phar = new Phar($buildRoot . "/console.phar",
	FilesystemIterator::CURRENT_AS_FILEINFO |     	FilesystemIterator::KEY_AS_FILENAME, "console.phar");

$phar->buildFromDirectory($srcRoot);
$phar->setStub($phar->createDefaultStub('bin/run.php', 'bin/run.php'));

//print_r($phar);