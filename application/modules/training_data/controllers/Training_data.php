<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training_data extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('training_model'));
  }

  public function index()
  {
      $this->training_data();
  }

  public function training_data()
  {
      $data['data'] = $this->training_model->select('training_data');
      $data['menu'] = 'summarization';
      $this->load->view('training_data_v', $data);
  }

  public function discernibilityMatrix()
  {
      $i = 1;
      $this->db->truncate('matrix_data');
      $data = $this->training_model->select('training_data');
      foreach ($data as $key => $value) {
          $j = 1;
          $class = 'EC'.$i;
          foreach ($data as $key => $value1) {
              $x = '';
              if ($value->date !== $value1->date) {
                  $x .= 'A';
              }
              if ($value->time !== $value1->time) {
                  $x .= 'B';
              }
              if ($value->region !== $value1->region) {
                  $x .= 'C';
              }
              if ($value->state !== $value1->state) {
                  $x .= 'D';
              }
              if ($value->date == $value1->date && $value->time == $value1->time && $value->region == $value1->region && $value->state == $value1->state) {
                  $x .= 'X';
              }
              $class_perbandingan = 'EC'.$j;
              $j++;
              $matrixData[] = array(
                  'class' => $class,
                  'class_pembanding' => $class_perbandingan,
                  'matrix' => $x
              );
          }
          $i++;
      }
      $this->training_model->insert_batch('matrix_data', $matrixData);
      redirect('training_data/discernibility_matrix');
  }

  public function discernibility_matrix()
  {
      $data['data_matrix'] = $this->training_model->select('matrix_data');
      $data['data_th'] = $this->training_model->select_distinct('matrix_data');
      $data['menu'] = 'summarization';
      $this->load->view('discernibility_matrix_v', $data);
  }

  public function discernibilityMatrixModulo()
  {
      $i = 1;
      $this->db->truncate('matrix_data_modulo');
      $data = $this->training_model->select('training_data');
      foreach ($data as $key => $value) {
          $j = 1;
          $class = 'EC'.$i;
          foreach ($data as $key => $value1) {
              $x = '';
              if ($value->date == $value1->date && $value->time == $value1->time && $value->region == $value1->region && $value->state == $value1->state) {
                  $x .= 'X';
              } else if ($value->api == $value1->api) {
                  $x .= 'X';
              } else {
                  if ($value->date !== $value1->date) {
                      $x .= 'A';
                  }
                  if ($value->time !== $value1->time) {
                      $x .= 'B';
                  }
                  if ($value->region !== $value1->region) {
                      $x .= 'C';
                  }
                  if ($value->state !== $value1->state) {
                      $x .= 'D';
                  }
              }


              $class_perbandingan = 'EC'.$j;
              $j++;
              $matrixData[] = array(
                  'class' => $class,
                  'class_pembanding' => $class_perbandingan,
                  'matrix' => $x
              );
          }
          $i++;
      }
      $this->training_model->insert_batch('matrix_data_modulo', $matrixData);
      redirect('training_data/discernibility_matrix_modulo');
  }

  public function discernibility_matrix_modulo()
  {
      $data['data_matrix'] = $this->training_model->select('matrix_data_modulo');
      $data['data_th'] = $this->training_model->select_distinct('matrix_data_modulo');
      $data['menu'] = 'summarization';
      $this->load->view('discernibility_matrix_modulo_v', $data);
  }

  public function consensus()
  {
      $e = $this->makeInternalForm('X+XY');
      var_dump($this->cosensusList($e));
  }

  private function cosensusList($expr)
  {
      $e = $expr;

      $all_done = false;
      $loops = 0;
      while (!$all_done) {
          $e = $this->consensusStep1($e);
      }
  }

  private function consensusStep1($expr)
  {
      $e = $expr;

  }

  private function makeInternalForm($var)
  {
      $s1 = $this->compressAndUpcase($var);
      if (strlen($s1) == 0) {
          return "*** Empty Expression ***";
      }

      $s = '';
      $d = '';
      $e2 = '';
      $n = strlen($s1);
      $term = array();
      $e1 = array();
      $termCount = 0;
      for ($i=0; $i < $n; $i++) {
          $c = $s1[$i];
          if (preg_match('/^[A-Z]{1,}$/i', $c)) {
              if ($i < $n-1) {
                  if ($s1[$i+1] == "'") {
                      $c = strtolower($c);
                  }
              }
              $term[] = $c;
          }
          if ($c == '+' OR $i == $n-1) {
              $d = implode(',', $term);
              $e1[] = '{'.$d.'}';
              unset($term);
          }
      }

      $e2 = implode(',', $e1);
      $e = '{'.$e2.'}';

      var_dump($e);
  }

  private function compressAndUpcase($cau)
  {
      $s = '';
      $s1 = strtoupper($cau);
      $n = strlen($s1);
      for ($i=0; $i < $n; $i++) {
          $c = $s1[$i];
          if (preg_match('/\S/', $c)) {
              $s = $s.$c;
          }
      }

      return $s;
  }

}
