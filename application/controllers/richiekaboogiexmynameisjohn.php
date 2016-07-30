<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Richiekaboogiexmynameisjohn extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Richie Kaboogie X mynameisjOhn';		
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);
		
		$data['desc'] = 'The Mix Exchange welcomes two of Irelands finest producers/dj’s making noise at the moment. Both Richie and John have a sturdy history behind the turntables and are excellent examples of how their Djing ears can translate to the producing game.';
		$data['img'] = 'img/richiekaboogieXmynameisjohn.jpg';
				
		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('richiekaboogie-x-mynameisjohn', $data);
		$this->load->view('includes/footer');

	}


}