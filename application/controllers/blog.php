<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function index($info_work_executed = 0)
	{
			$this->load->library('template');
			$date['stories'] = $this->data_extraction_model->get_stories();
			$date['comment'] = $this->data_extraction_model->get_comment(); 
			$this->template->page_view($date,$info_work_executed);	
	}
}
?>