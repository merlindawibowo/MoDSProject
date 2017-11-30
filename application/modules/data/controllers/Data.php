<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('data_model');
  }

  public function index()
  {
      $data['menu'] = 'data';
      $this->load->view('data_v', $data);
  }

  public function ajax_show_data_file()
  {
    if (!empty($this->input->post())) {
      $result = $this->data_model->get_data_file();

      $response = array(
        "success" => true,
        "response" => [
            "data" => $result
          ]
      );

      echo json_encode($response);
    }
  }

  public function ajax_set_data_api()
  {
    if (!empty($this->input->post())) {
        $this->clean_db();
        $directory = FCPATH . 'uploads/files/';
        $this->load->library('excel');
        $array = $this->input->post("fileData");
        // $array = array('data_MY.csv');
        $data_import = array();
        foreach ($array as $key => $filename) {
            $filepath = $directory . $filename;

            try {
                $Reader = PHPExcel_IOFactory::createReaderForFile($filepath);
                $Reader->setReadDataOnly(true);
                $obj = $Reader->load($filepath);

            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($file,PATHINFO_BASENAME).'": '.$e->getMessage());
            }

            $highest_column = $obj->setActiveSheetIndex(0)->getHighestColumn();
            $highest_row = $obj->setActiveSheetIndex(0)->getHighestRow();
            // $data_import = array();
            for ($i=2; $i <= $highest_row; $i++) {
                $status = false;
                for ($j='A'; $j <= $highest_column; $j++) {
                    if ($obj->getSheet(0)->getCell($j.$i)->getValue() !== '') {
                        $value[$obj->getSheet(0)->getCell($j.'1')->getValue()] = $obj->getSheet(0)->getCell($j.$i)->getValue();
                    } else {
                        $status = true;
                    }
                }
                if ($status !== true) {
                    if (in_array($value, $data_import)) {
                        $data_unused[] = $value;
                    } else {
                        $data_import[] = $value;
                    }
                } else {
                    $data_unused[] = $value;
                }
            }
        }
        $this->db->truncate('main_data');
        if (!empty($data_unused)) {
            $this->db->truncate('unused_data');
            $this->data_model->insert_batch('unused_data', $data_unused);
        }
        $this->data_model->insert_batch('main_data', $data_import);

        echo json_encode(['success' => true]);
    }
  }

  private function clean_db()
  {
      $this->db->truncate('training_data');
      $this->db->truncate('testing_data');
      $this->db->truncate('matrix_data');
  }

  public function reset()
  {
      $this->db->truncate('main_data');
      $this->db->truncate('matrix_data');
      $this->db->truncate('matrix_data_modulo');
      $this->db->truncate('training_data');
      $this->db->truncate('testing_data');
      $this->db->truncate('training_data');
      $this->db->truncate('unused_data');
      $this->db->truncate('upload_file');

      $files = glob('uploads/files/*'); // get all file names
      foreach($files as $file){ // iterate files
          if(is_file($file))
          unlink($file); // delete file
      }
  }

}
