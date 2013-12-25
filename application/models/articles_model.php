<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model{
		
		 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
		
		function get_articles($table)
		{
			if($table=='feature_stories')
			{
				$this->db->order_by('id','DESC');
			}
			$query = $this->db->get($table);
			return $query->result_array();
		}
		
		
}
?>
