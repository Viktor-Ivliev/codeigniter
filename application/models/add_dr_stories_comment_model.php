<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_dr_stories_comment_model extends CI_Model
{

	function __construct()
    {
       // Call the Model constructor
       parent::__construct();
    }
		
	function add_stories($stories_date)
	{
			$this->db->insert('feature_stories',$stories_date);
	}

	function add_comment($comment_date)
	{
			$this->db->insert('comment',$comment_date);
	}

	function update_stories($date,$id)
	{
			$this->db->where('id',$id);
			$this->db->update('feature_stories',$date);
	}

	function delete_stories($id)
	{
			$this->db->where('id',$id);
			$this->db->delete('feature_stories');
	}

}

?>