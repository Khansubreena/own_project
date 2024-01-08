<?php
class Apps extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
    
		// $this->load->model('Packages_model');
		// $this->load->model('blog_model');
		// $this->load->model('tag_model');
		// $this->load->model('Pages_model');
		// $this->load->model('Category_model');
		// $this->load->model('Testimonials_model');
		// $this->load->model('Guides_model');
		// $this->load->model('Gallery_model');

		// $this->load->library('ion_auth');
		// $this->load->library('cart');
		// $this->load->helper('url');
	}
	public function index($page = 'index')
	{
		if (!file_exists(APPPATH . 'views/apps/' . $page . '.php')) {
			show_404();
		}
		$this->load->view('apps/' . $page);
	}

 
}
