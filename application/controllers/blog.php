<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function index()
	{
		$this->load->model('articles_model');
		$date['articles_stories']=$this->articles_model->get_articles('feature_stories');
		$date['articles_comment']=$this->articles_model->get_articles('comment');
		$this->load->view('blog_view',$date);
		
		//if($_POST['form']==1)
		{
			if(!empty($_POST['title']) and !empty($_POST['body']))
			{
			$data['title'] = $this->articles_model->ClearData($_POST['title']);
			$date['body'] = $this->articles_model->ClearData($_POST['body']);
			$date['author'] = $this->articles_model->ClearData($_POST['author']);
			$this->articles_model->add_stite_comment('feature_stories',$date);
			}
		}
	}
	
	
	
}
?>