<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-02 03:29:55 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-02 03:29:55 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-02 03:34:18 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-02 03:34:18 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_index')
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
2015-01-02 03:34:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Index.php [ 39 ] in file:line
2015-01-02 03:34:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 03:36:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 26 ] in file:line
2015-01-02 03:36:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 03:38:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 26 ] in file:line
2015-01-02 03:38:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:05:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Index.php [ 2 ] in file:line
2015-01-02 04:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:06:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 40 ] in file:line
2015-01-02 04:06:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:08:22 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Index.php [ 10 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:10
2015-01-02 04:08:22 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\OpenServer\d...', 10, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:10
2015-01-02 04:08:43 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Index.php [ 10 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:10
2015-01-02 04:08:43 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\OpenServer\d...', 10, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:10
2015-01-02 04:08:58 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Index.php [ 10 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:10
2015-01-02 04:08:58 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\OpenServer\d...', 10, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:10
2015-01-02 04:09:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 41 ] in file:line
2015-01-02 04:09:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:10:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 38 ] in file:line
2015-01-02 04:10:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:10:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 38 ] in file:line
2015-01-02 04:10:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:11:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 38 ] in file:line
2015-01-02 04:11:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:14:09 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Index.php [ 8 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:8
2015-01-02 04:14:09 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:8
2015-01-02 04:18:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2015-01-02 04:18:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:21:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2015-01-02 04:21:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:22:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2015-01-02 04:22:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:23:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2015-01-02 04:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 04:23:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2015-01-02 04:23:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 06:48:27 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:48:27 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:48:28 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:48:28 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:18 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:18 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:19 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:19 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:32 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:49:32 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:50:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Index.php [ 2 ] in file:line
2015-01-02 06:50:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 06:50:57 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:50:57 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:50:58 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:50:58 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:51:12 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:51:12 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:51:13 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\bootstrap.php [ 152 ] in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:51:13 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\bootstrap.php(152): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 152, Array)
#1 C:\OpenServer\domains\kohana.org\index.php(102): require('C:\OpenServer\d...')
#2 {main} in C:\OpenServer\domains\kohana.org\application\bootstrap.php:152
2015-01-02 06:51:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Index.php [ 2 ] in file:line
2015-01-02 06:51:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 06:52:00 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‘default’ - assumed '‘default’' ~ APPPATH\classes\Controller\Index.php [ 11 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:11
2015-01-02 06:52:00 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(11): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Core.php(511): require('C:\OpenServer\d...')
#2 [internal function]: Kohana_Core::auto_load('Controller_Inde...')
#3 [internal function]: spl_autoload_call('Controller_Inde...')
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Inde...')
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:11
2015-01-02 06:52:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2015-01-02 06:52:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-02 06:52:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2015-01-02 06:52:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line