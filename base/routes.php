<?php

$LANGUAGE_GET = empty($_GET['lang']) ? INFO_default_language : addslashes($_GET['lang']);
$PAGE_GET = empty($_GET['pg']) ? "home" : addslashes($_GET['pg']);

define('PATH_template', 'views/templates/'.INFO_template.'/');
define('PATH_language', 'views/languages/'.$LANGUAGE_GET.'/');
define('PATH_pages', 'views/pages/');
define('PATH_base_module', 'base/modules/');
define('PATH_actions_module', 'actions/modules/');

define('CURRENT_PAGE', PATH_pages.$PAGE_GET.'.php');
define('LANGUAGE', PATH_language.INFO_template.'.php');
define('LANGUAGE_DEFAULT', 'views/languages/'.INFO_default_language.'/'.INFO_template.'.php');