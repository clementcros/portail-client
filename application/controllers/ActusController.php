<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 02/05/2019
 * Time: 09:24
 */

class ActusController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('ActusModel');
	}

	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('actus');
	}

	public function readArticle($id)
	{
		$this->load->view('partial/header');
		$this->load->view('article');
	}

	public function getArticle()
	{
		$result = $this->ActusModel->getArticle($_REQUEST['id']);
		$this->jsonEncode($result);
	}

	public function getArticles()
	{
		if(isset($_REQUEST['limit']))
		{
			$limit = 2;
		}
		else {
			$limit = null;
		}
		$result = $this->ActusModel->getArticles($limit);
			$this->jsonEncode($result);
	}
	public final function jsonEncode ($data)
	{
		echo json_encode($data);
	}

}
