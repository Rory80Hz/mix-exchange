<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TimparkerxjayScarlett extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Tim Parker X Jay Scarlett';
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);

		$data['desc'] = 'Either Tim Parker or Jay Scarlett could be seen as modern a day, Robert Earle of Huntington. Stealing melodic treasures from the musically rich and giving knowledge and sounds to our hungry ears. Albeit via their radio slots on NTS, London and PULS, Bavaria and not the ambush style of the heroic outlaw found in English folklore.';
		$data['img'] = 'img/timparkerXjayscarlett.jpg';

		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('timparker-x-jayscarlett', $data);
		$this->load->view('includes/footer');

	}


}