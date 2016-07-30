<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kenryuxdefcon extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Ken & Ryu X Defcon';
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);

		$data['desc'] = 'Belfast is a happy breeding ground for madness and chaos. We celebrate our failures while ensuring our renowned keep their feet firmly on the ground. If Belfast didn’t laugh we would all drown in tears. So its no surprise these two tune monkeys have taken their exchange with a pinch of salt.';
		$data['img'] = 'img/kenryuXdefcon.jpg';

		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('kenryu-x-defcon', $data);
		$this->load->view('includes/footer');

	}


}