<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_update extends CI_Controller 
{

	function index($num_row)
	{	

		$date['stories'] = $this->data_extraction_model->get_row_stories($num_row);
		$this->load->view('blog_script_view');
		$this->load->view('blog_header_menu_view');
		$this->load->view('form_update_view',$date);
		$this->load->view('blog_futer_view');
	}

}
?>