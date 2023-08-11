<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class sliderImage extends Controller
{

	public function __construct()
	{
		parent::__construct();
		Auth::checkLogin();
	}

	public function index()
	{
		$this->view->js = array('views/sliderImage/index.js');
		// $this->view->js = array('views/sliderImage/index.css');
		$this->view->pageTitle = "sliderImage";
		$this->view->render('sliderImage', 'index');
	}

	public function getData()
	{
		echo json_encode($this->model->getData());
	}

	public function update()
	{
		$data = json_decode(file_get_contents('php://input'), true);
		echo json_encode($this->model->update($data));
	}
}
