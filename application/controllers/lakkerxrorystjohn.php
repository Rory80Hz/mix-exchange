<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lakkerxrorystjohn extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Lakker X Rory St. John';
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);

		$data['desc'] = 'Dara Smith, Ian McDonnell and Rory St. John are three originators of euphonious sounds that emerged from Dublins electronic music scene, and migrated with ease to the musical hub of Berlin.';
		$data['img'] = 'img/lakkerXrorystjohn.jpg';

		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('lakker-x-rorystjohn', $data);
		$this->load->view('includes/footer');

	}


}