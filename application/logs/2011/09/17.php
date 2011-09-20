<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-17 18:58:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/curl/classes/kohana/curl.php [ 65 ]
2011-09-17 18:58:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/curl/classes/kohana/curl.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:20:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/generator.php [ 15 ]
2011-09-17 19:20:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/generator.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:25:22 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/generator.php [ 13 ]
2011-09-17 19:25:22 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/generator.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:25:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Class' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-09-17 19:25:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Class' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:26:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_Class' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-09-17 19:26:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_Class' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:27:27 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'd4rky'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-17 19:27:27 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'd4rky'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('classes')
#3 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(25): Kohana_ORM::factory('class')
#8 [internal function]: Controller_Generator->action_index()
#9 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#10 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#13 {main}
2011-09-17 19:34:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 30 ]
2011-09-17 19:34:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 30 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/usb2/www...', 30, Array)
#1 [internal function]: Controller_Generator->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:34:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 30 ]
2011-09-17 19:34:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 30 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/usb2/www...', 30, Array)
#1 [internal function]: Controller_Generator->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:34:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 30 ]
2011-09-17 19:34:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 30 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/usb2/www...', 30, Array)
#1 [internal function]: Controller_Generator->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:35:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 31 ]
2011-09-17 19:35:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 31 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/usb2/www...', 31, Array)
#1 [internal function]: Controller_Generator->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:40:21 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 33 ]
2011-09-17 19:40:21 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 33, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(33): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:41:09 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 33 ]
2011-09-17 19:41:09 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 33, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(33): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:41:33 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 35 ]
2011-09-17 19:41:33 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 35, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(35): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:44:00 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 37 ]
2011-09-17 19:44:00 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 37, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(37): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:47:59 --- ERROR: ErrorException [ 1 ]: Call to undefined function error_repoting() ~ APPPATH/classes/controller/generator.php [ 37 ]
2011-09-17 19:47:59 --- STRACE: ErrorException [ 1 ]: Call to undefined function error_repoting() ~ APPPATH/classes/controller/generator.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:51:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 44 ]
2011-09-17 19:51:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: methods_list ~ APPPATH/classes/controller/generator.php [ 44 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/usb2/www...', 44, Array)
#1 [internal function]: Controller_Generator->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:53:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant methods_list - assumed 'methods_list' ~ APPPATH/classes/controller/generator.php [ 43 ]
2011-09-17 19:53:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant methods_list - assumed 'methods_list' ~ APPPATH/classes/controller/generator.php [ 43 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', '/media/usb2/www...', 43, Array)
#1 [internal function]: Controller_Generator->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:54:11 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 42 ]
2011-09-17 19:54:11 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 42, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(42): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:54:42 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 43 ]
2011-09-17 19:54:42 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 43, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(43): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:55:07 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 43 ]
2011-09-17 19:55:07 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 43, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(43): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:55:11 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 43 ]
2011-09-17 19:55:11 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 43, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(43): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:55:27 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 42 ]
2011-09-17 19:55:27 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 42, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(42): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:55:43 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 42 ]
2011-09-17 19:55:43 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): ID logo already defined in Entity, line: 37 ~ APPPATH/classes/controller/generator.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 42, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(42): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:56:01 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 42 ]
2011-09-17 19:56:01 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 42, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(42): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 19:58:42 --- ERROR: ErrorException [ 8 ]: Undefined property: DOMNodeList::$nodeValue ~ APPPATH/classes/controller/generator.php [ 44 ]
2011-09-17 19:58:42 --- STRACE: ErrorException [ 8 ]: Undefined property: DOMNodeList::$nodeValue ~ APPPATH/classes/controller/generator.php [ 44 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', '/media/usb2/www...', 44, Array)
#1 [internal function]: Controller_Generator->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 20:03:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/generator.php [ 58 ]
2011-09-17 20:03:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/generator.php [ 58 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(58): Kohana_Core::error_handler(8, 'Trying to get p...', '/media/usb2/www...', 58, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(46): Controller_Generator::_dom_innerhtml('????public stat...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 20:08:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/controller/generator.php [ 47 ]
2011-09-17 20:08:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/controller/generator.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 20:08:40 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'd4rky'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-17 20:08:40 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'd4rky'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('classes')
#3 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(29): Kohana_ORM::factory('class')
#8 [internal function]: Controller_Generator->action_index()
#9 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#10 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#13 {main}
2011-09-17 20:08:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'd4rky'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-17 20:08:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'd4rky'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('classes')
#3 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(29): Kohana_ORM::factory('class')
#8 [internal function]: Controller_Generator->action_index()
#9 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#10 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#13 {main}
2011-09-17 20:09:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method DOMNodeList::current() ~ APPPATH/classes/controller/generator.php [ 44 ]
2011-09-17 20:09:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method DOMNodeList::current() ~ APPPATH/classes/controller/generator.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 20:10:56 --- ERROR: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 41 ]
2011-09-17 20:10:56 --- STRACE: ErrorException [ 2 ]: DOMDocument::loadHTML(): Unexpected end tag : ol in Entity, line: 184 ~ APPPATH/classes/controller/generator.php [ 41 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'DOMDocument::lo...', '/media/usb2/www...', 41, Array)
#1 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(41): DOMDocument->loadHTML('<!DOCTYPE html ...')
#2 [internal function]: Controller_Generator->action_index()
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 20:19:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Method' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-09-17 20:19:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Method' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 20:20:38 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'lookup' [ INSERT INTO `methods` (`class_id`, `name`, `content`, `lookup`) VALUES (2, ('extract'), '\n\n\n	public static extract( array $array , array $keys [, mixed $default = NULL ] )\n	(defined in Kohana_Arr)\n\n\n\nRetrieves multiple keys from an array. If the key does not exist in the\narray, the default value will be added instead.\n\n// Get the values \"username\", \"password\" from $_POST\n$auth = Arr::extract($_POST, array(\'username\', \'password\'));\n\n\n\nParameters\n\narray\n$array\nrequired - Array to extract keys from\n\narray\n$keys\nrequired - List of key names\n\nmixed\n$default\n = NULL - Default value\nReturn Values\narray\n\nSource Code\npublic static function extract($array, array $keys, $default = NULL)\n{\n	$found = array();\n	foreach ($keys as $key)\n	{\n		$found[$key] = isset($array[$key]) ? $array[$key] : $default;\n	}\n\n	return $found;\n}\n\n\n', 'Arr::Array') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-17 20:20:38 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'lookup' [ INSERT INTO `methods` (`class_id`, `name`, `content`, `lookup`) VALUES (2, ('extract'), '\n\n\n	public static extract( array $array , array $keys [, mixed $default = NULL ] )\n	(defined in Kohana_Arr)\n\n\n\nRetrieves multiple keys from an array. If the key does not exist in the\narray, the default value will be added instead.\n\n// Get the values \"username\", \"password\" from $_POST\n$auth = Arr::extract($_POST, array(\'username\', \'password\'));\n\n\n\nParameters\n\narray\n$array\nrequired - Array to extract keys from\n\narray\n$keys\nrequired - List of key names\n\nmixed\n$default\n = NULL - Default value\nReturn Values\narray\n\nSource Code\npublic static function extract($array, array $keys, $default = NULL)\n{\n	$found = array();\n	foreach ($keys as $key)\n	{\n		$found[$key] = isset($array[$key]) ? $array[$key] : $default;\n	}\n\n	return $found;\n}\n\n\n', 'Arr::Array') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `me...', false, Array)
#1 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(62): Kohana_ORM->save()
#4 [internal function]: Controller_Generator->action_index()
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#6 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-17 20:21:10 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'Arr::Array' for key 'lookup' [ INSERT INTO `methods` (`class_id`, `name`, `content`, `lookup`) VALUES (3, ('extract'), '\n\n\n	public static extract( array $array , array $keys [, mixed $default = NULL ] )\n	(defined in Kohana_Arr)\n\n\n\nRetrieves multiple keys from an array. If the key does not exist in the\narray, the default value will be added instead.\n\n// Get the values \"username\", \"password\" from $_POST\n$auth = Arr::extract($_POST, array(\'username\', \'password\'));\n\n\n\nParameters\n\narray\n$array\nrequired - Array to extract keys from\n\narray\n$keys\nrequired - List of key names\n\nmixed\n$default\n = NULL - Default value\nReturn Values\narray\n\nSource Code\npublic static function extract($array, array $keys, $default = NULL)\n{\n	$found = array();\n	foreach ($keys as $key)\n	{\n		$found[$key] = isset($array[$key]) ? $array[$key] : $default;\n	}\n\n	return $found;\n}\n\n\n', 'Arr::Array') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-17 20:21:10 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'Arr::Array' for key 'lookup' [ INSERT INTO `methods` (`class_id`, `name`, `content`, `lookup`) VALUES (3, ('extract'), '\n\n\n	public static extract( array $array , array $keys [, mixed $default = NULL ] )\n	(defined in Kohana_Arr)\n\n\n\nRetrieves multiple keys from an array. If the key does not exist in the\narray, the default value will be added instead.\n\n// Get the values \"username\", \"password\" from $_POST\n$auth = Arr::extract($_POST, array(\'username\', \'password\'));\n\n\n\nParameters\n\narray\n$array\nrequired - Array to extract keys from\n\narray\n$keys\nrequired - List of key names\n\nmixed\n$default\n = NULL - Default value\nReturn Values\narray\n\nSource Code\npublic static function extract($array, array $keys, $default = NULL)\n{\n	$found = array();\n	foreach ($keys as $key)\n	{\n		$found[$key] = isset($array[$key]) ? $array[$key] : $default;\n	}\n\n	return $found;\n}\n\n\n', 'Arr::Array') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `me...', false, Array)
#1 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(62): Kohana_ORM->save()
#4 [internal function]: Controller_Generator->action_index()
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#6 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-17 20:21:56 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'Arr::callback' for key 'lookup' [ INSERT INTO `methods` (`class_id`, `name`, `content`, `lookup`) VALUES (5, 'callback', '\n\n\n	public static callback( string $str )\n	(defined in Kohana_Arr)\n\n\n\nCreates a callable function and parameter list from a string representation.\nNote that this function does not validate the callback string.\n\n// Get the callback function and parameters\nlist($func, $params) = Arr::callback(\'Foo::bar(apple,orange)\');\n\n// Get the result of the callback\n$result = call_user_func_array($func, $params);\n\n\n\nParameters\n\nstring\n$str\nrequired - Callback string\nReturn Values\narray - Function, params\n\nSource Code\npublic static function callback($str)\n{\n	// Overloaded as parts are found\n	$command = $params = NULL;\n\n	// command[param,param]\n	if (preg_match(\'/^([^\\(]*+)\\((.*)\\)$/\', $str, $match))\n	{\n		// command\n		$command = $match[1];\n\n		if ($match[2] !== \'\')\n		{\n			// param,param\n			$params = preg_split(\'/(?&lt;!\\\\\\\\),/\', $match[2]);\n			$params = str_replace(\'\\,\', \',\', $params);\n		}\n	}\n	else\n	{\n		// command\n		$command = $str;\n	}\n\n	if (strpos($command, \'::\') !== FALSE)\n	{\n		// Create a static method callable command\n		$command = explode(\'::\', $command, 2);\n	}\n\n	return array($command, $params);\n}\n\n\n', 'Arr::callback') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-17 20:21:56 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'Arr::callback' for key 'lookup' [ INSERT INTO `methods` (`class_id`, `name`, `content`, `lookup`) VALUES (5, 'callback', '\n\n\n	public static callback( string $str )\n	(defined in Kohana_Arr)\n\n\n\nCreates a callable function and parameter list from a string representation.\nNote that this function does not validate the callback string.\n\n// Get the callback function and parameters\nlist($func, $params) = Arr::callback(\'Foo::bar(apple,orange)\');\n\n// Get the result of the callback\n$result = call_user_func_array($func, $params);\n\n\n\nParameters\n\nstring\n$str\nrequired - Callback string\nReturn Values\narray - Function, params\n\nSource Code\npublic static function callback($str)\n{\n	// Overloaded as parts are found\n	$command = $params = NULL;\n\n	// command[param,param]\n	if (preg_match(\'/^([^\\(]*+)\\((.*)\\)$/\', $str, $match))\n	{\n		// command\n		$command = $match[1];\n\n		if ($match[2] !== \'\')\n		{\n			// param,param\n			$params = preg_split(\'/(?&lt;!\\\\\\\\),/\', $match[2]);\n			$params = str_replace(\'\\,\', \',\', $params);\n		}\n	}\n	else\n	{\n		// command\n		$command = $str;\n	}\n\n	if (strpos($command, \'::\') !== FALSE)\n	{\n		// Create a static method callable command\n		$command = explode(\'::\', $command, 2);\n	}\n\n	return array($command, $params);\n}\n\n\n', 'Arr::callback') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /media/usb2/www/Projects/kohana-api/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `me...', false, Array)
#1 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /media/usb2/www/Projects/kohana-api/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /media/usb2/www/Projects/kohana-api/application/classes/controller/generator.php(62): Kohana_ORM->save()
#4 [internal function]: Controller_Generator->action_index()
#5 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Generator))
#6 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-17 21:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-17 21:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-17 21:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-17 21:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-17 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:10:48 --- ERROR: HTTP_Exception_500 [ 500 ]:  ~ APPPATH/classes/controller/search.php [ 8 ]
2011-09-17 21:10:48 --- STRACE: HTTP_Exception_500 [ 500 ]:  ~ APPPATH/classes/controller/search.php [ 8 ]
--
#0 [internal function]: Controller_Search->action_index()
#1 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#5 {main}
2011-09-17 21:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:22:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/search.php [ 8 ]
2011-09-17 21:22:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/search.php [ 8 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/search.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', '/media/usb2/www...', 8, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 21:23:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Methods' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-09-17 21:23:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Methods' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 21:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:31:48 --- ERROR: ErrorException [ 8 ]: Undefined index: query ~ APPPATH/classes/controller/search.php [ 6 ]
2011-09-17 21:31:48 --- STRACE: ErrorException [ 8 ]: Undefined index: query ~ APPPATH/classes/controller/search.php [ 6 ]
--
#0 /media/usb2/www/Projects/kohana-api/application/classes/controller/search.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/media/usb2/www...', 6, Array)
#1 [internal function]: Controller_Search->action_index()
#2 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#3 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /media/usb2/www/Projects/kohana-api/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 21:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g/b3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g/b3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g/b3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g/b3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-17 21:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g/b3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-17 21:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g/b3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /media/usb2/www/Projects/kohana-api/index.php(109): Kohana_Request->execute()
#1 {main}