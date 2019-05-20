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

	public function getArticles()
	{
		$result = $this->ActusModel->getArticles();
			$this->jsonEncode($result);
	}
	public final function jsonEncode ($data)
	{
		echo json_encode($data);
	}

}
