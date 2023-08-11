<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class dashboard extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::checkLogin();
	}

	public function index() {
		$this->view->pageTitle = "Dashboard";
		$this->view->render('dashboard', 'index');
	}
}