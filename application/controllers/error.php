<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index()
	{
		$data['title'] = ' - ' . ucwords( str_replace ( '-', ' ', $this->uri->segment(1) ));
		$data['body'] = 'error';
		$data['nav'] = $this->load->view('includes/nav', '', true);

		$section = $this->uri->segment(1);

		$data['desc'] = 'Sorry, this page cannot be found!';
		$data['img'] = ' ';

		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('error404', $data);
		$this->load->view('includes/footer');

	}


}