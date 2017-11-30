<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summarization_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function select($table)
  {
      return $this->db->get($table)->result();
  }

  public function insert_batch($table, $datas)
  {
        $this->db->trans_start();

        $_datas = array_chunk($datas, 300);

        foreach ($_datas as $key => $data) {
            $this->db->insert_batch($table, $data);
        }

        $this->db->trans_complete();
  }

}
