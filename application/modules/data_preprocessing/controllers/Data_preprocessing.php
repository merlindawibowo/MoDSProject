<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_preprocessing extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('dataprep_model'));
  }

  public function index()
  {
      $this->data_preprocessing();
  }

  public function data_preprocessing()
  {
      $data['data'] = $this->dataprep_model->select('main_data');
      $data['menu'] = 'summarization';
      $this->load->view('data_preprocessing_v', $data);
  }

  public function unused_data()
  {
      $data['data'] = $this->dataprep_model->select('unused_data');
      $data['menu'] = 'summarization';
      $this->load->view('data_unused_preprocessing_v', $data);
  }

  public function shuffle_assoc($list) {
        if (!is_array($list)) return $list;

        $keys = array_keys($list);
        shuffle($keys);
        $random = array();
        foreach ($keys as $key)
          $random[$key] = $list[$key];

        return $random;
  }

  function array_chunk_fixed($input, $num, $preserve_keys = FALSE) {
      $count = count($input);
      if($count)
          $input = array_chunk($input, ceil($count/$num), $preserve_keys) ;
      $input = array_pad($input, $num, array()) ;
      return $input ;
  }

}
