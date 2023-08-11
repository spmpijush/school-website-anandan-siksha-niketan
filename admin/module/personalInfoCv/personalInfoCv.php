<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class personalInfoCv extends Controller
{

	public function __construct()
	{
		parent::__construct();
		Auth::checkLogin();
	}

	public function index()
	{
		$this->view->js = array('views/personalInfoCv/index.js');
		$this->view->css = array('views/personalInfoCv/index.css');

		$this->view->pageTitle = "Personal Information / CV";
		$this->view->render('personalInfoCv', 'index');
	}

	public function getData()
	{
		echo json_encode($this->model->getData());
	}
	public function getEducationData()
	{
		echo json_encode($this->model->getEducationData());
	}
	public function getSkilsData()
	{
		echo json_encode($this->model->getSkilsData());
	}
	public function saveSkilsData()
	{
		echo json_encode($this->model->saveSkilsData());
	}
	public function saveEducationData()
	{
		echo json_encode($this->model->saveEducationData());
	}
	public function saveWorkExperienceData()
	{
		echo json_encode($this->model->saveWorkExperienceData());
	}
	public function getWorkExperienceData()
	{
		echo json_encode($this->model->getWorkExperienceData());
	}
	public function getGalleryData()
	{
		echo json_encode($this->model->getGalleryData());
	}

	public function update()
	{
		$data = json_decode(file_get_contents('php://input'), true);
		echo json_encode($this->model->update($data));
	}
	public function educationRemove()
	{
		echo json_encode($this->model->remove());
	}
	public function educationUpdate()
	{
		echo json_encode($this->model->update());
	}
}
