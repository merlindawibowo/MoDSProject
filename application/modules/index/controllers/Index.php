<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $data['menu'] = 'index';
      $this->load->view('index_v', $data);
  }

}
