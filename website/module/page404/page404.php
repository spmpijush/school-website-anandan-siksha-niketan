<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class page404 extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "Page not found!";
		$this->view->css = array('views/page404/index.css');
		$this->view->render('page404', 'index');
	}
}
