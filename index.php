<?php
require_once 'vendor/autoload.php'; // Use the Composer autoload file

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');

$smarty->assign('title', 'Smarty Project');
$smarty->assign('heading', 'Hello, Smarty!');

$smarty->display('index.tpl');
