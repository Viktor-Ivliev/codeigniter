<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_stori extends CI_Controller 
{

	function index()
	{	

		$this->load->model('rules_model');
		$this->form_validation->set_rules($this->rules_model->update_rules_stories);
		$check = $this->form_validation->run();
		if($check == TRUE)
		{
				$this->load->model('add_delete_update_model');
				$date['body'] = $this->input->post('update_body');
				$id = $this->input->post('id');
				$this->add_delete_update_model->update_stories($date,$id);

				redirect(base_url().'index.php/blog/index/3#');

		}else
		{
			$this->load->view('blog_script_view');
			$this->load->view('blog_header_menu_view');
			$this->load->view('form_update_view');
			$this->load->view('blog_futer_view');
		}

	}

}
?>