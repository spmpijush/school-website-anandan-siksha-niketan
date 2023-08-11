<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class logout extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
	}
	
	public function index() {
        if (isset($_SESSION['username'])) {
			Session::set("username", "");
            Session::destroy("username");
		}
        header("Location: login");
	}
}