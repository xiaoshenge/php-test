<?php
/**
 *
 *
 * @author: xiaoshenge
 * Date: 2017/6/29 16:21
 *
 */

$srcRoot = "./src";
$buildRoot = "./build";
 
$phar = new Phar($buildRoot . "/myapp.phar",
	FilesystemIterator::CURRENT_AS_FILEINFO |     	FilesystemIterator::KEY_AS_FILENAME, "myapp.phar");

$phar->buildFromDirectory($srcRoot);
$phar->setStub($phar->createDefaultStub('common.php', 'common.php'));

//print_r($phar);