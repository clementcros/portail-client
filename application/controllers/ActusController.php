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
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('actus');
	}

}
