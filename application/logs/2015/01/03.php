<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-03 00:34:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Index.php [ 14 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:14
2015-01-03 00:34:47 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Core.php(511): require('C:\OpenServer\d...')
#2 [internal function]: Kohana_Core::auto_load('Controller_Inde...')
#3 [internal function]: spl_autoload_call('Controller_Inde...')
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Inde...')
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:14
2015-01-03 00:34:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\Index.php [ 14 ] in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:14
2015-01-03 00:34:51 --- DEBUG: #0 C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Core.php(511): require('C:\OpenServer\d...')
#2 [internal function]: Kohana_Core::auto_load('Controller_Inde...')
#3 [internal function]: spl_autoload_call('Controller_Inde...')
#4 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Inde...')
#5 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohana.org\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohana.org\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohana.org\application\classes\Controller\Index.php:14