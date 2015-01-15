<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-05 10:02:39 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\views\v_index.php [ 2 ] in C:\OpenServer\domains\kohana.org\application\views\v_index.php:2
2015-01-05 10:02:39 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\views\v_index.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\application\views\v_index.php:2
2015-01-05 10:03:28 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant content - assumed 'content' ~ APPPATH\views\v_index.php [ 4 ] in C:\OpenServer\domains\kohana.org\application\views\v_index.php:4
2015-01-05 10:03:28 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\views\v_index.php(4): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohana.org\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohana.org\application\views\v_index.php:4
2015-01-05 11:08:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Viev' not found ~ APPPATH\classes\Controller\Index.php [ 14 ] in file:line
2015-01-05 11:08:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-05 11:50:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_static' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-05 11:50:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line