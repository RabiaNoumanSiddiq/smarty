<?php
define('SMARTY_DIR', 'path/to/smarty/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');
