<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parpol_m extends CI_Model {

    public function parpol_get_all()
    {
        $result = $this->db->get('parpol')
                            ->result();
        return $result;
    }

    public function parpol_by_id($id)
    {
        $result = $this->db->where('id', $id)
                            ->get('parpol')
                            ->row();
        return $result;
    }

    public function anggota_by_parpol($id)
    {
        $result = $this->db->where('id_parpol', $id)
                            ->get('anggota_parpol')
                            ->result();
        return $result;
    }

    public function parpol_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('parpol');
    }

    public function parpol_update_data($post_data, $id)
    {
        return $this->db->where('id', $id)->update('parpol', $post_data);
    }

    public function parpol_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('parpol');
    }

    public function parpol_insert_anggota($post_data)
    {
        return $this->db->set($post_data)->insert('anggota_parpol');
    }

    public function parpol_update_anggota($post_data, $id)
    {
        return $this->db->where('id', $id)->update('anggota_parpol', $post_data);
    }

    public function anggota_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('anggota_parpol');
    }

}
