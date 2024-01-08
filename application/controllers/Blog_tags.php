<?php
class Blog_Tags extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Tag_model');
	}
	public function index()
	{
		$cardId = $this->input->post('cardId');
		$customer = $this->input->post('customer');
		$balance = $this->input->post('balance');

		$data = array(
			'card_number' => $cardId,
			'customer_number' => $customer,
			'balance' => $balance
		);

		// Insert data into the database
		$this->Tag_model->insert_data($data);

		// Redirect to the initial page
		redirect('apps');
	}
}
