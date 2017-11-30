<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analytics_model extends CI_Model{

  	public function __construct()
  	{
   		parent::__construct();
  	}

  	public function get_region()
  	{
    	$query = $this->db->select('region')
    					->from('main_data')
    					->group_by('region')
    					->order_by('region', 'ASC')
    					->get();

		return $query->result();
  	}

  	public function get_state()
  	{
    	$query = $this->db->select('state')
    					->from('main_data')
    					->group_by('state')
    					->order_by('state', 'ASC')
    					->get();

		return $query->result();
  	}

  	public function get_statistic_data($group_by)
  	{
  		$query = $this->db->select('COUNT(api) AS total')
  						->from('main_data')
  						->group_by($group_by)
  						->order_by($group_by, 'ASC')
  						->get();
  		return $query->result();
  	}

}
