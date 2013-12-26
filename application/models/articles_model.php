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
		
		function add_stite_comment($table,$date)
		{
			$this->db->insert($table,$date);
		}
		
		/*function get_row_comment($id)
		{
			$this->db->get('id_stories',$id);
			$query = $this->db->get('comment');
			echo $query->num_rows(); 
		}*/
		
		
		
		
		
}
?>
