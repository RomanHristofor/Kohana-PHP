<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-11 06:15:31 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/v_headar could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-11 06:15:31 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('templates/v_hea...')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/v_hea...', NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(20): Kohana_View::factory('templates/v_hea...')
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-11 06:17:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: main2 ~ APPPATH\classes\Controller\Index.php [ 22 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:22
2015-01-11 06:17:35 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:22
2015-01-11 06:48:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_categori' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-11 06:48:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-11 07:00:17 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/v_headar could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-11 07:00:17 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('templates/v_hea...')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/v_hea...', NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(19): Kohana_View::factory('templates/v_hea...')
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-11 10:49:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\views\templates\v_karusel.php [ 12 ] in C:\OpenServer\domains\kohana.org\application\views\templates\v_karusel.php:12
2015-01-11 10:49:04 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\views\templates\v_karusel.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 12, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.org\application\views\v_index.php(59): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana.org\application\views\templates\v_karusel.php:12