<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moresoundsxdannyscrilla extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Moresounds X Danny Scrilla';		
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);
		
		$data['desc'] = 'In the first of a series of musical exchanges, we encouraged Danny Scrilla (Cosmic Bridge & Civil Music) and Moresounds (Astrophonic & Cosmic Bridge) to lock horns in a mix of two halves. Both artists showcasing, their talents as producers and their love for Dub music. As part of the exchange both Danny and Germain where tasked with asking each other the interview questions that follow. This concept should give us some insight and context to the mix they provided.';
		$data['img'] = 'img/moresoundsXdannyscrilla.jpg';
				
		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('moresounds-x-dannyscrilla', $data);
		$this->load->view('includes/footer');

	}


}