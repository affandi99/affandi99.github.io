<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pembayaran extends CI_Controller {

	public function index()
	{
		$this->load->view('pembayaran');
	}
}
