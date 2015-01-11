<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-01 06:37:59 --- CRITICAL: Kohana_Exception [ 0 ]: Kohana_Response::status unknown status value : hello, world! ~ SYSPATH\classes\Kohana\Response.php [ 213 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Welcome.php:8
2015-01-01 06:37:59 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Welcome.php(8): Kohana_Response->status('hello, world!')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Welcome.php:8
2015-01-01 06:38:03 --- CRITICAL: Kohana_Exception [ 0 ]: Kohana_Response::status unknown status value : hello, world! ~ SYSPATH\classes\Kohana\Response.php [ 213 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Welcome.php:8
2015-01-01 06:38:03 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Welcome.php(8): Kohana_Response->status('hello, world!')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Welcome.php:8
2015-01-01 08:06:17 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 08:06:17 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-01 08:06:49 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 08:06:49 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-01 08:06:52 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 08:06:52 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-01 08:15:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\views\v_index.php [ 7 ] in file:line
2015-01-01 08:15:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-01 13:06:27 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 13:06:27 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-01 13:06:32 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 13:06:32 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-01 13:06:36 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 13:06:36 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-01 13:09:59 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 13:09:59 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-01 14:00:14 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 14:00:14 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_index', NULL)
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('v_index')
#3 C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php(7): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 14:02:40 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 14:02:40 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php(7): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-01 14:03:10 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\index.php [ 8 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php:8
2015-01-01 14:03:10 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php:8
2015-01-01 14:03:56 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\index.php [ 8 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php:8
2015-01-01 14:03:56 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\index.php:8