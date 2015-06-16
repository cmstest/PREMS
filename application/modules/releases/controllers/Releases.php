<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Releases extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('releases_model');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->lang->load('releases', 'german');
        $this->lang->load('pagination', 'german');
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function all() {
        $data = array();

        $num = $this->releases_model->num_all();

        $config = array();
        $config["base_url"] = base_url()."releases/all";
        $config["total_rows"] = $num;
        $config["per_page"] = 50;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $num;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = $this->lang->line('pagination_next_link');
        $config['prev_link'] = $this->lang->line('pagination_prev_link');

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $data['links'] = $this->pagination->create_links();

        $data['title'] = $this->lang->line('releases_all_title');

        $this->load->view('base/header', $data);
        $this->load->view('list', $data);
        $this->load->view('base/footer');
    }
}
