<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function index()
	{

		if(isset($_POST['add_stories']))
		{
			$this->load->model('rules_model');
			$this->form_validation->set_rules($this->rules_model->add_rules_stories);
			$check = $this->form_validation->run(); 

			if($check == TRUE)
			{
				$stories_date['title'] = $this->input->post('title');
				$stories_date['author'] = $this->input->post('author');
				$stories_date['body'] = $this->input->post('body');

				$this->load->model('add_dr_stories_comment_model');
				$this->add_dr_stories_comment_model->add_stories($stories_date);

				redirect(base_url().'index.php/blog');
 
			}
		}


		if(isset($_POST['comment_add']))
		{
			$this->load->model('rules_model');
			$this->form_validation->set_rules($this->rules_model->add_rules_comment);
			$check_comment = $this->form_validation->run(); 

			if($check_comment == TRUE)
			{	
				$comment_date['id_stories'] = $this->input->post('id_stories');
				$comment_date['author'] = $this->input->post('author_comment');
				$comment_date['body'] = $this->input->post('body_comment');

				$this->load->model('add_dr_stories_comment_model');
				$this->add_dr_stories_comment_model->add_comment($comment_date);

				redirect(base_url().'index.php/blog');
			}
		}


			$date['stories'] = $this->data_extraction_model->get_stories();
			$date['comment'] = $this->data_extraction_model->get_comment();
			$this->load->library('template'); 
			$this->template->page_view($date);
		
	}
		
}
?>