<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'libraries/REST_Controller.php');

class API extends REST_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->helper('string');
        $this->load->model('releases/releases_model');
    }

    public function add_post() {
        $releaseid = random_string('alnum', 30);
        $releasename = $this->input->post('releasename');
        $category = $this->input->post('category');

        if($this->releases_model->has_release($releasename)) {
            $this->response(array(
                config_item('rest_status_field_name') => 0,
                config_item('rest_message_field_name') => 'duplicate'
            ), 500);

            return;
        }

        $data = array(
            'id'          => $releaseid,
            'releasename' => $releasename,
            'category'    => $category,
            'releasetime' => time()
        );

        $this->releases_model->add($data);

        $this->response(array(
            config_item('rest_status_field_name') => 1,
            'id' => $releaseid
        ));
    }

    public function update_put() {
        echo 'UPDATE PUT';
    }

    public function delete_delete($id) {
        echo 'DELETE DELETE';
    }

    public function latest_get($catid) {
        $latest = $this->api_model->get_latest($catid);
    }

    public function info_post() {

    }
}