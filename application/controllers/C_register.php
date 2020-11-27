<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
	}
 
	public function index()
	{
		$this->load->view('auth/register');
	}

}