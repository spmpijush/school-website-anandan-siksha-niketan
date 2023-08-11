<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class organization extends Controller
{

	public function __construct()
	{
		parent::__construct();
		Auth::checkLogin();
	}

	public function index()
	{
		$this->view->js = array('views/organization/index.js');
		$this->view->pageTitle = "Organization";
		$this->view->render('organization', 'index');
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
