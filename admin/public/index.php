<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

require '../config/paths.php';
require '../config/database.php';

// remove __autoload function as it depreciated
// create the spl_autoload_register function to auto load the classes
function my_autoloader($class) {
	if (file_exists("../frame_libs/". $class .".php")) {
		include "../frame_libs/". $class .".php";
	}
}

spl_autoload_register('my_autoloader');

new Router();