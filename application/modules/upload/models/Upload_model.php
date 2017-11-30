<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function upload_file($data)
  {
    $this->db->insert('upload_file', $data);
    
    return $this->db->affected_rows();
  }



}
