<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian_m extends CI_Model {

    public function penelitian_get_all()
    {
        $result = $this->db->get('penelitian')
                            ->result();
        return $result;
    }

    public function penelitian_by_id($id)
    {
        $result = $this->db->where('id', $id)
                            ->get('penelitian')
                            ->row();
        return $result;
    }

    public function penelitian_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('penelitian');
    }

    public function penelitian_update_data($post_data, $id)
    {
        return $this->db->where('id', $id)->update('penelitian', $post_data);
    }

    public function penelitian_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('penelitian');
    }

}
