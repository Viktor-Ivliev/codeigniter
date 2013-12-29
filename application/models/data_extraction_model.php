<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_extraction_model extends CI_Model{
		
	function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
		
	function get_stories()
	{
		$this->db->order_by('id','DESC');
		$query = $this->db->get('feature_stories');
		return $query->result_array();
	}

	function get_comment()
	{
		$query = $this->db->get('comment');
		return $query->result_array();
	}

		
	function get_row_comment($id)
	{
		$this->db->where('id_stories',$id);
		$query = $this->db->get('comment');
		return $query->num_rows(); 
	}
		

	function get_row_stories($id_udate_stories)
	{
		$this->db->where('id',$id_udate_stories);
		$query = $this->db->get('feature_stories');
		return $query->row_array();
	}
		
}
?>
