<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function index()
	{
		$this->load->model('articles_model');
		$date['articles_stories']=$this->articles_model->get_articles('feature_stories');
		$date['articles_comment']=$this->articles_model->get_articles('comment');
		$this->load->view('blog_view',$date);
	}
	
	
}
?>