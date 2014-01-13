<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function index($info_work_executed = 0)
	{

		if(isset($_POST['add_stories']))
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
 
			}
		}


		if(isset($_POST['comment_add']))
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
			}
		}

			$this->load->library('template');
			$date['stories'] = $this->data_extraction_model->get_stories();
			$date['comment'] = $this->data_extraction_model->get_comment(); 
			$this->template->page_view($date,$info_work_executed);
		
	}
		
}
?>