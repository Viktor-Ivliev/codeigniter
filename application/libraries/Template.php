<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту'); 

	class Template {

		function page_view($date)
		{
			$CI =& get_instance(); 

			$CI->load->view('blog_script_view');
			$CI->load->view('blog_header_menu_view');
			$CI->load->view('content_view',$date);
			$CI->load->view('form_add_stories_view');
			$CI->load->view('blog_futer_view');
		}
		
	}
?>