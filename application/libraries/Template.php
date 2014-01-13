<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту'); 

	class Template {

		function page_view($date,$info_work_executed)
		{
			$CI =& get_instance(); 

			$CI->load->view('blog_script_view');
			$CI->load->view('blog_header_menu_view');
			if($info_work_executed != 0)
			{
				$info['info_work_executed']=$info_work_executed; 
				$CI->load->view('message_work_executed_view',$info);
			}
			$CI->load->view('content_view',$date);
			$CI->load->view('form_add_stories_view');
			$CI->load->view('blog_futer_view');
		}
		
	
	}
?>