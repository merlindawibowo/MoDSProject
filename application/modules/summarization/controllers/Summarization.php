<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summarization extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('summarization_model'));
  }

  public function index()
  {
      $this->summarization();
  }

  public function summarization()
  {
      $data['menu'] = 'summarization';
      $this->load->view('summarization_v', $data);
  }

  public function split_data()
  {
      if (!empty($this->input->post())) {
          $arr = $this->summarization_model->select('main_data');
          $data_1 = $this->input->post('data_1');
          $jml_data = count($arr);
          if ($data_1 > 50) {
              $data_satu = floor(($data_1*$jml_data)/100);
          } else {
              $data_satu = ceil(($data_1*$jml_data)/100);
          }
          $arr_data_satu = array_slice($arr, 0, $data_satu);
          $arr_data_dua = array_slice($arr, $data_satu, $jml_data);

          $this->db->truncate('training_data');
          $this->db->truncate('testing_data');
          $this->db->truncate('matrix_data');
          $this->summarization_model->insert_batch('training_data', $arr_data_satu);
          $this->summarization_model->insert_batch('testing_data', $arr_data_dua);

          echo json_encode(['success' => true]);
      }
  }

}
