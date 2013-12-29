<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_update extends CI_Controller {

	function index($num_row)
	{	

		$date['stories'] = $this->data_extraction_model->get_row_stories($num_row);
		$this->load->view('blog_script_view');
		$this->load->view('blog_header_menu_view');
		$this->load->view('form_update_view',$date);
		$this->load->view('blog_futer_view');
	}

	function udate_stori()
	{
		$this->load->model('rules_model');
		$this->form_validation->set_rules($this->rules_model->update_rules_stories);
		$check = $this->form_validation->run();
		if($check == TRUE)
		{
				$date['body'] = $this->input->post('update_body');
				$id = $this->input->post('id');
				$this->load->model('add_dr_stories_comment_model');
				$this->add_dr_stories_comment_model->update_stories($date,$id);

				redirect(base_url().'index.php/blog');

		}else
		{
			$this->load->view('blog_script_view');
			$this->load->view('blog_header_menu_view');
			$this->load->view('form_update_view');
			$this->load->view('blog_futer_view');
		}

	}

	function delete_stori($del)
	{
		$this->load->model('add_dr_stories_comment_model');
		$this->add_dr_stories_comment_model->delete_stories($del);
		redirect(base_url().'index.php/blog');
	}


}
?>