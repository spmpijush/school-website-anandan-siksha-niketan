<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class changePassword extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::checkLogin();
	}

	public function index() {
		$this->view->pageTitle = "Change password";

		$this->view->js = array(
			"views/changePassword/manager.js"
			);
		$this->view->render('changePassword','index');
	}

	public function change() {
		echo json_encode($this->model->change());
	}
}