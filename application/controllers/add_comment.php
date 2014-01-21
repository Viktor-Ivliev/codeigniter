<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_comment extends CI_Controller {

	function index()
	{
		$this->load->model('rules_model');
		$this->form_validation->set_rules($this->rules_model->add_rules_comment);
		$check_comment = $this->form_validation->run(); 

		if($check_comment == TRUE)
		{	
			$this->load->model('add_dr_stories_comment_model');
			$comment_date['id_stories'] =  $this->add_dr_stories_comment_model->ClearData($this->input->post('id_stories'));
			$comment_date['author'] =  $this->add_dr_stories_comment_model->ClearData($this->input->post('author_comment'));
			$comment_date['body'] = $this->add_dr_stories_comment_model->ClearData($this->input->post('body_comment'));

			$this->add_dr_stories_comment_model->add_comment($comment_date);

			redirect(base_url().'index.php/blog/index/2#');
		} else {
			//на случай не правильного ввода
			$this->load->library('template');
			$date['stories'] = $this->data_extraction_model->get_stories();
			$date['comment'] = $this->data_extraction_model->get_comment(); 
			$this->template->page_view($date);

		}
		
	}
}