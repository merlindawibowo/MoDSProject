<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('upload_model');
  }

  public function index()
  {
    $this->upload();
  }

  public function upload()
  {
      $data['menu'] = 'data';
      $this->load->view('upload_v', $data);
  }

  public function ajax_upload_file()
  {
    if (!empty($this->input->post())) {
      $fileName = '';

      if($_FILES['file']['tmp_name'] != NULL) {
        $config['upload_path'] = './uploads/files';
        $config['allowed_types'] = 'csv';
        $config['file_name'] = $_FILES['file']['name'];
        $config['overwrite'] = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
          $response = array(
              "success" => false,
              "response" => [
                  "message" => $this->upload->display_errors()
              ]
          );
          echo json_encode($response);
        } else {
          $fileName = $config['file_name'];
        }
      }

      if ($fileName !== '') {
        $data = array(
          'file_name' => $fileName,
        );

        $result = $this->upload_model->upload_file($data);

        $response = array(
            "success" => true,
            "response" => [
                "message" => "berhasil"
            ]
        );

        echo json_encode($response);
      } else {
        $response = array(
            "success" => false,
            "response" => [
                "message" => "harus diisi"
            ]
        );

        echo json_encode($response);
      }
    }
  }

}
