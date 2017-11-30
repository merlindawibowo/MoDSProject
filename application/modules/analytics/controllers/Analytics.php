<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analytics extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('analytics_model');
        $this->load->helper('json_helper');
    }

    public function index()
    {
        $this->analytics();
    }

    public function analytics()
    {
        $get_region_data = $this->analytics_model->get_region();
        $regions = array();
        foreach ($get_region_data AS $val) {
            array_push($regions, $val->region);
        }
        $get_analytic_data = $this->analytics_model->get_statistic_data('region');
        $api = array();
        foreach ($get_analytic_data AS $val) {
            array_push($api, (integer) $val->total);
        }

        $data['api'] = json_encode($api);
        $data['label'] = json_encode($regions);
        $data['menu'] = 'summarization';
        $this->load->view('analytics_v', $data);
    }

    public function get_labels()
    {
        $group_by = !$this->input->post('group_by') ? 'region' : $this->input->post('group_by');

        switch ($group_by) {
            case 'region':
                $labels = $this->analytics_model->get_region();
                break;
            case 'state':
                $labels = $this->analytics_model->get_state();
                break;
            default:
                $labels = $this->analytics_model->get_region();
                break;
        }

        $result = array();
        foreach ($labels AS $key => $val) {
            array_push($result, $val->$group_by);
        }

        $output = json(200, $result);
        echo $output;
    }

    public function get_data()
    {
        $data_by = !$this->input->post('group_by') ? 'region' : $this->input->post('group_by');

        $get_analytic_data = $this->analytics_model->get_statistic_data($data_by);
        
        $result = array();
        foreach ($get_analytic_data AS $val) {
            array_push($result, (integer) $val->total);
        }

        $output = json(200, $result);
        echo $output;
    }

    public function get_label_data()
    {
        $group_by = !$this->input->post('group_by') ? 'region' : $this->input->post('group_by');

        switch ($group_by) {
            case 'region':
                $get_labels = $this->analytics_model->get_region();
                break;
            case 'state':
                $get_labels = $this->analytics_model->get_state();
                break;
            default:
                $get_labels = $this->analytics_model->get_region();
                break;
        }

        $labels = array();
        foreach ($get_labels AS $key => $val) {
            array_push($labels, $val->$group_by);
        }

        $get_analytic_data = $this->analytics_model->get_statistic_data($group_by);
        
        $api = array();
        foreach ($get_analytic_data AS $val) {
            array_push($api, (integer) $val->total);
        }

        $result = array(
            'api' => $api,
            'labels' => $labels
        );

        $output = json(200, $result);
        echo $output;
    }
}
