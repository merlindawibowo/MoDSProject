<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function select($table)
  {
      return $this->db->get($table)->result();
  }

}
