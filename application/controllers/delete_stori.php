<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_stori extends CI_Controller 
{
	function index($del=0)
	{
		
		$this->load->model('add_dr_stories_comment_model');
		$this->add_dr_stories_comment_model->delete_stories($del);
		redirect(base_url().'index.php/blog/index/4#');
	}
}
?>