<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_m extends CI_Model {

    public function pesan_get_all()
    {
        $result = $this->db->get('pesan')
                            ->result();
        return $result;
    }

    public function pesan_by_id($id)
    {
        $result = $this->db->where('id', $id)
                            ->get('pesan')
                            ->row();
        return $result;
    }

    public function pesan_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('pesan');
    }

    public function pesan_update_data($post_data, $id)
    {
        return $this->db->where('id', $id)->update('pesan', $post_data);
    }

    public function pesan_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('pesan');
    }

}
