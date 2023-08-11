<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class sliderImageSetup extends Controller {

	public function __construct() {
		Auth::checkLogin();
		parent::__construct();
		$this->view->pageTitle = "Slider image setup";
	}
	
	public function index() {
		$this->view->css = array('views/sliderImageSetup/ui/index.css');
		$this->view->js = array(
			'views/sliderImageSetup/uiBuilder.js',
			'views/sliderImageSetup/manager.js',
			'views/sliderImageSetup/createUpdate.js'
		);
		$this->view->render('sliderImageSetup', 'index');
	}

	public function getList() {
		echo json_encode($this->model->getList());
	}

	public function create() {
		echo json_encode($this->model->create());
	}

	public function remove() {
		echo json_encode($this->model->remove());
	}
}