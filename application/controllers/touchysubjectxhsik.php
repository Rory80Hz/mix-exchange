<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Touchysubjectxhsik extends CI_Controller {

	public function index()
	{
		$data['title'] = '- Touchy Subject-x-H-SIK';		
		$data['body'] = 'home';
		$data['nav'] = $this->load->view('includes/nav', '', true);
		
		$data['desc'] = 'London meets Haarlem on the second in the series. Delight to welcome Tocuhy Subject (CardBoardBoss.com) and H-Sik (Black Arce) to the exchange. Although living in very different city these two are drawn together by the continaully growing web community that seems, in some ways, to revolve around a particular bpm. The pair discuss production, influences and therapy. ';
		$data['img'] = 'img/touchysubjectXhsik.jpg';
				
		$this->load->helper('url');

		$this->load->view('includes/header', $data);
		$this->load->view('touchysubject-x-hsik', $data);
		$this->load->view('includes/footer');

	}


}