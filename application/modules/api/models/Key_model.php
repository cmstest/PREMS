<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Key_model extends CI_Model
{
    public function generate_key()
    {
        do
        {
            $salt = hash('sha512', time().mt_rand());
            $new_key = substr($salt, 0, config_item('rest_key_length'));
        }

        // Already in the DB? Fail. Try again
        while (self::key_exists($new_key));

        return $new_key;
    }

    public function get_key($key)
    {
        return $this->db->where(config_item('rest_key_column'), $key)->get(config_item('rest_keys_table'))->row();
    }

    public function get_key_by_user($user) {
        $row = $this->db->where('user_id', $user)->get(config_item('rest_keys_table'))->row();
        if(!$row || empty($row)) {
            return '';
        }

        return $row->{config_item('rest_key_column')};
    }

    public function key_exists($key)
    {
        return $this->db->where(config_item('rest_key_column'), $key)->count_all_results(config_item('rest_keys_table')) > 0;
    }

    public function insert_key($key, $data)
    {
        $data[config_item('rest_key_column')] = $key;
        $data['date_created'] = function_exists('now') ? now() : time();

        return $this->db->set($data)->insert(config_item('rest_keys_table'));
    }

    public function update_key($key, $data)
    {
        return $this->db->where(config_item('rest_key_column'), $key)->update(config_item('rest_keys_table'), $data);
    }

    public function delete_key($key)
    {
        return $this->db->where(config_item('rest_key_column'), $key)->delete(config_item('rest_keys_table'));
    }
}