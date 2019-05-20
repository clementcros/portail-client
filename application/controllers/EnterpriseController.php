<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 06/05/2019
 * Time: 11:07
 */

class EnterpriseController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ClientModel');
	}

	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('entreprise');
	}

	public function getResponsable()
	{
		$check = $this->ClientModel->getResponsableClient($_SESSION['id']);
		echo json_encode($check);
	}
}
