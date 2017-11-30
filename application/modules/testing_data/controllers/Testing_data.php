<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_data extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('testing_model'));
  }

  public function index()
  {
      $this->testing_data();
  }

  public function testing_data()
  {
      $data['data'] = $this->testing_model->select('testing_data');
      $data['menu'] = 'summarization';
      $this->load->view('testing_data_v', $data);
  }

}
