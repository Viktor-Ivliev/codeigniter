<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules_model extends CI_Model
{
	function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }

     public $add_rules_stories = array(
     	array(
     		'field' => 'title',
     		'label' => 'Тема',
     		'rules' => 'required|xss_clean|prep_for_form',
     	),

     	array(
     		'field' => 'author',
     		'label' => 'Автор',
     		'rules' => 'xss_clean|prep_for_form',
     	),
          
     	array(
     		'field' => 'body',
     		'label' => 'Статья',
     		'rules' => 'required|xss_clean|prep_for_form',
     	)
     );

      public $add_rules_comment = array(
          array(
               'field' => 'id_stories',
               'label' => '',
               'rules' => '',
          ),
          array(
               'field' => 'author_comment',
               'label' => 'Автор',
               'rules' => 'required|xss_clean|prep_for_form',
          ),
          
          array(
               'field' => 'body_comment',
               'label' => 'Комментарий',
               'rules' => 'required|xss_clean|prep_for_form',
          )

     );

     public $update_rules_stories = array(
          array(
               'field' => 'id',
               'label' => '',
               'rules' => '',
          ),
          array(
               'field' => 'udate_title',
               'label' => '',
               'rules' => '',
          ),
          array(
               'field' => 'udate_author',
               'label' => '',
               'rules' => '',
          ),
          
          array(
               'field' => 'update_body',
               'label' => 'Статья:*',
               'rules' => 'required|xss_clean|prep_for_form',
          )

     );

}

?>