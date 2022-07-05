<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_m extends CI_Model {

    public function berita_get_all()
    {
        $result = $this->db->get('berita')
                            ->result();
        return $result;
    }

    public function berita_by_id($id)
    {
        $result = $this->db->where('id', $id)
                            ->get('berita')
                            ->row();
        return $result;
    }

    public function berita_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('berita');
    }

    public function berita_update_data($post_data, $id)
    {
        return $this->db->where('id', $id)->update('berita', $post_data);
    }

    public function berita_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('berita');
    }

}
