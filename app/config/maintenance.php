<?php

use Fiesta\Core\Config\Config;


return array(

	/*
	|----------------------------------------------------------
	| App Maintenance
	|----------------------------------------------------------
	*/

	'activate' => false, 

	/*
	|----------------------------------------------------------
	| Maintenance Message
	|----------------------------------------------------------
	*/
	'msg' => "Le site web est en cours de maintenance...",

	/*
	|----------------------------------------------------------
	| Maintenance background
	|----------------------------------------------------------
	*/
	'bg' => "#d6003e",

	/*
	|----------------------------------------------------------
	| Out Maintenance Routes
	|----------------------------------------------------------
	*/

	'outRoutes' => array(
		Config::get('panel.route'),
	),


);
