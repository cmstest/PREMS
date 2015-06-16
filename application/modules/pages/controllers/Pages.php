<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('pages_model');
        $this->load->helper('url');
    }

    public function index($page = '') {
        if(!$page || empty($page)) {
            show_404();
            return;
        }

        $pageObj = $this->pages_model->get_by_alias($page);

        if(!$pageObj || empty($pageObj)) {
            show_404();
            return;
        }

        $data = array(
            'title' => $pageObj->title,
            'page' => $pageObj
        );

        $this->load->view('base/header', $data);
        $this->load->view('page', $data);
        $this->load->view('base/footer', $data);
    }
}