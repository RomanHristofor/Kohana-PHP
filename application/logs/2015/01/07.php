<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-07 07:29:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ xdebug://debug-eval [ 1 ] in file:line
2015-01-07 07:29:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-07 08:46:11 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-07 08:46:11 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_index', NULL)
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('v_index')
#3 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(7): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-07 08:46:19 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-07 08:46:19 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_index', NULL)
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('v_index')
#3 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(7): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145