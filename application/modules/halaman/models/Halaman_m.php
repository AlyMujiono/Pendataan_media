<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_m extends CI_Model {

    public function halaman_get_all()
    {
        $result = $this->db->get('halaman')
                            ->result();
        return $result;
    }

    public function halaman_by_id($id)
    {
        $result = $this->db->where('id', $id)
                            ->get('halaman')
                            ->row();
        return $result;
    }

    public function halaman_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('halaman');
    }

    public function halaman_update_data($post_data, $id)
    {
        return $this->db->where('id', $id)->update('halaman', $post_data);
    }

    public function halaman_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('halaman');
    }

}
