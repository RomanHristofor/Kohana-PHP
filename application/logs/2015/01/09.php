<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-09 10:25:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: main ~ APPPATH\views\v_index.php [ 58 ] in C:\OpenServer\domains\kohana.org\application\views\v_index.php:58
2015-01-09 10:25:18 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\views\v_index.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 58, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\application\views\v_index.php:58
2015-01-09 10:26:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: main ~ APPPATH\views\v_index.php [ 58 ] in C:\OpenServer\domains\kohana.org\application\views\v_index.php:58
2015-01-09 10:26:41 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\views\v_index.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 58, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\application\views\v_index.php:58
2015-01-09 10:31:19 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/v_otzyvs could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-09 10:31:19 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('templates/v_otz...')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/v_otz...', NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(9): Kohana_View::factory('templates/v_otz...')
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-09 10:33:37 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/v_otzyvs could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-09 10:33:37 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('templates/v_otz...')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/v_otz...', NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(9): Kohana_View::factory('templates/v_otz...')
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-09 10:33:40 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/v_otzyvs could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-09 10:33:40 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(145): Kohana_View->set_filename('templates/v_otz...')
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/v_otz...', NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(9): Kohana_View::factory('templates/v_otz...')
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php:145
2015-01-09 10:48:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::sabmit() ~ APPPATH\views\templates\v_otzyvs.php [ 14 ] in file:line
2015-01-09 10:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:48:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::sabmit() ~ APPPATH\views\templates\v_otzyvs.php [ 14 ] in file:line
2015-01-09 10:48:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 10:50:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\views\templates\v_otzyvs.php [ 14 ] in file:line
2015-01-09 10:50:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 11:15:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Otzyvs.php [ 14 ] in file:line
2015-01-09 11:15:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 11:16:05 --- CRITICAL: Kohana_Exception [ 0 ]: The FIO property does not exist in the Model_Otzyv class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:702
2015-01-09 11:16:05 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('FIO', 'fafawf')
#1 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(13): Kohana_ORM->__set('FIO', 'fafawf')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:702
2015-01-09 11:16:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: y-m-d ~ APPPATH\classes\Controller\Otzyvs.php [ 16 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php:16
2015-01-09 11:16:37 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 16, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php:16
2015-01-09 11:17:02 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\Otzyvs.php [ 16 ] in file:line
2015-01-09 11:17:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 11:17:05 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\Otzyvs.php [ 16 ] in file:line
2015-01-09 11:17:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 11:17:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: show ~ APPPATH\classes\Controller\Otzyvs.php [ 17 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php:17
2015-01-09 11:17:17 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php:17
2015-01-09 11:42:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::bin() ~ APPPATH\classes\Controller\Otzyvs.php [ 29 ] in file:line
2015-01-09 11:42:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 11:43:28 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in C:\OpenServer\domains\kohana.org\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in C:\OpenServer\domains\kohana.org\system\classes\Kohana\Validation.php:211
2015-01-09 11:43:28 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\OpenServer\d...', 211, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule(0, 'e', 'm')
#2 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(410): Kohana_Validation->rules(0, Array)
#3 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#4 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#10 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohana.org\system\classes\Kohana\Validation.php:211
2015-01-09 11:44:37 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:44:37 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:44:42 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:44:42 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:44:47 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:44:47 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:47:50 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:47:50 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:49:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:49:03 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:50:40 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:50:40 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:51:11 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:51:11 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:51:15 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 11:51:15 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(20): Kohana_ORM->save()
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:1302
2015-01-09 12:13:18 --- CRITICAL: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Otzyv class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:603
2015-01-09 12:13:18 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find')
#1 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(9): Kohana_ORM->__get('find')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php:603
2015-01-09 12:15:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''show'' at line 1 [ SELECT `otzyv`.`id` AS `id`, `otzyv`.`ip` AS `ip`, `otzyv`.`fio` AS `fio`, `otzyv`.`email` AS `email`, `otzyv`.`body` AS `body`, `otzyv`.`showhide` AS `showhide`, `otzyv`.`putdate` AS `putdate` FROM `otzyvs` AS `otzyv` WHERE `showhide`  'show' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\kohana.org\modules\database\classes\Kohana\Database\Query.php:251
2015-01-09 12:15:01 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `otzyv`....', 'Model_Otzyv', Array)
#1 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\kohana.org\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\kohana.org\application\classes\Controller\Otzyvs.php(9): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(84): Controller_Otzyvs->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\modules\database\classes\Kohana\Database\Query.php:251
2015-01-09 12:15:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\templates\v_otzyvs.php [ 31 ] in file:line
2015-01-09 12:15:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-09 12:24:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\templates\v_otzyvs.php [ 21 ] in C:\OpenServer\domains\kohana.org\application\views\templates\v_otzyvs.php:21
2015-01-09 12:24:50 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\views\templates\v_otzyvs.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.org\application\views\v_index.php(58): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Otzyvs))
#11 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana.org\application\views\templates\v_otzyvs.php:21