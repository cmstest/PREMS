<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->model('releases/Releases_model');
    }

    public function add() {

    }

    public function get($id) {
        return $this->releases_model->get($id);
    }

    public function get_cat($catid) {
        return $this->releases_model->get_cat($catid);
    }

    public function get_all() {
        return $this->releases_model->get_all();
    }

    public function get_latest($catid) {
        return $this->releases_model->get_latest($catid);
    }
}