<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    /**
     * add()
     * Insert record into booking table
     *
     * @param array $data
     */
    public function add($data) {
        $this->db->insert('pages', $data);
    }

    /**
     * update()
     * Update record in booking table
     *
     * @param int   $page_id
     * @param array $data
     */
    public function update($page_id, $data) {
        $this->db->update('pages', $data, array('id' => intval($page_id)));
    }

    /**
     * delete()
     * Delete record from booking table
     *
     * @param int $page_id
     */
    public function delete($page_id) {
        $this->db->delete('pages', array('id' => intval($page_id)));
    }

    public function get($id) {
        return $this->db->select('*')->from('pages')->where('id', $id)->get()->row();
    }

    public function get_by_alias($alias) {
        return $this->db->select('*')->from('pages')->where('alias', $alias)->get()->row();
    }

    public function get_all() {
        return $this->db->select('*')->from('pages')->order_by('id ASC')->get();
    }
}