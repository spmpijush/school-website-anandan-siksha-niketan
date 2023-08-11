<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class demo extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->css = array('views/demo/index.css');
		$this->view->js = array('views/demo/index.js');
		// $this->view->js = array('module/demo/ui/index.js');
		// $this->view->getNotice = $this->model->getNotice();
		$this->view->getSliderImages = $this->model->getSliderImages();
		$this->view->getPageData = $this->model->getPageData();
		$this->view->getHomePageAboutData = $this->model->getHomePageAboutData();
		$this->view->getHeadmasterAboutData = $this->model->getHeadmasterAboutData();
		$this->view->getGalleryImage = $this->model->getGalleryImage();
		$this->view->getNotice = $this->model->getNotice();
		$this->view->getStaffList = $this->model->getStaffList();
		$this->view->getSchoolInformation = $this->model->getSchoolInformation();
		$this->view->render('demo', 'index');
	}
}
