<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

require '../config/paths.php';
require '../config/connection.php';

function my_autoloader($class)
{
	if (file_exists("../frame_libraries/" . $class . ".php")) {
		include "../frame_libraries/" . $class . ".php";
	}
}

spl_autoload_register('my_autoloader');

new Router();
