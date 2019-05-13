<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 03/05/2019
 * Time: 11:12
 */

class LoginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ClientModel');
	}
	public function index()
	{
		$idClient = $_REQUEST['idclient'];
		$name  = $_REQUEST['name'];
		$check = $this->ClientModel->login($idClient, $name);
		echo json_encode($check);
	}
	public function getInfos()
	{
		echo json_encode($_SESSION);
	}
}
