<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stillheadxroughquest extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Stillhead X Roughquest';		
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);
		
		$data['desc'] = 'Alex Cowles(Stillhead) and James Morris (Roughquest) are no strangers to each others music. Both have crossed paths on the Subdepth imprint and then later joined the dots when Roughquest released his ‘Hybrid’ Ep on ‘Cut’, one of the three labels Alex is busy juggling.';
		$data['img'] = 'img/StillheadXRoughquest.jpg';
				
		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('stillhead-x-roughquest', $data);
		$this->load->view('includes/footer');

	}


}