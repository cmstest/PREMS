<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class releases_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add($data) {
        $this->db->insert('releases', $data);
    }

    public function del($id) {
        $this->db->delete('releases', array('id' => $id));
    }

    public function update($id, $data) {
        $this->db->where('id', $id)->update($data);
    }

    public function add_info($data) {
        $this->db->insert('releases_info', $data);
    }

    public function update_info($releaseid, $data) {
        $this->db->where('releaseid', $releaseid)->update('releases_info', $data);
    }

    public function delete_info($releaseid) {
        $this->db->delete('releases_info', array('releaseid' => $releaseid));
    }

    public function has_release($release) {
        $this->db->like('releasename', $release);
        $this->db->from('releases');
        return $this->db->count_all_results();
    }

    public function num_all() {
        return $this->db->count_all('releases');
    }

    public function get($id) {
        return $this->db->select('*')->from('releases')->where('id', $id);
    }

    public function get_cat($catid) {
        return $this->db->select('*')->from('releases')->where('category', $catid);
    }

    public function get_all() {
        return $this->db->select('*')->from('releases');
    }

    public function get_latest($catid = 0, $limit = 15) {
        if($catid > 0) {
            return $this->db->select('*')->from('releases')->where('category', $catid)->order_by('release_time', 'DESC')->limit($limit);
        }

        return $this->db->select('*')->from('releases')->order_by('release_time DESC')->limit($limit);
    }

    public function get_release_info($release) {
        return $this->db->select('*')->from('releases_info')->where('releaseid', $release)->get()->row();
    }

    public function get_with_info($start = 0, $cat = 0) {
        $this->db->select('*')->from('releases');
        $this->db->join('releases_info', 'releaseid = id');

        if($cat > 0) {
            $this->db->where('category', $cat);
        }

        $this->db->limit($start, 50);

        return $this->db->get();
    }

    public function get_release_with_info($release) {
        return $this->db->select('*')->from('releases')->join('releases_info', 'releaseid = id')->where('id', $release)->limit(1)->get()->row();
    }
}