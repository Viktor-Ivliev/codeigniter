<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_stories extends CI_Controller {

	function index()
	{
		$this->load->model('rules_model');
		$this->form_validation->set_rules($this->rules_model->add_rules_stories);
		$check = $this->form_validation->run(); 

		if($check == TRUE)
		{
			$this->load->model('add_dr_stories_comment_model');
			$stories_date['title'] = $this->add_dr_stories_comment_model->ClearData($this->input->post('title'));
			$stories_date['author'] =$this->add_dr_stories_comment_model->ClearData($this->input->post('author'));
			$stories_date['body'] = $this->add_dr_stories_comment_model->ClearData($this->input->post('body'));
				
			$this->add_dr_stories_comment_model->add_stories($stories_date);
			redirect(base_url().'index.php/blog/index/1#');

		} else {
			

			$this->load->library('template');
			$date['stories'] = $this->data_extraction_model->get_stories();
			$date['comment'] = $this->data_extraction_model->get_comment(); 
			$this->template->page_view($date);

		}
		
	}
}