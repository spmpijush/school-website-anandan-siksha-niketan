<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class login extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		if(Session::get('id_user') != null) {
			header('location: dashboard');
		}
	}
	
	public function index() {
		$this->view->css = array('views/login/login.css');
		$this->view->js = array('views/login/index.js');
		$this->view->render('login','index', true);
	}

	public function getLogin() {
		echo json_encode($this->model->getLogin());
	}
}