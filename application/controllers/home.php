<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Home';		
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);
		
		$data['desc'] = 'A series of musical exchanges';
		$data['img'] = 'img/i/icon.png';
				
		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('home', $data);
		$this->load->view('includes/footer');

	}


}