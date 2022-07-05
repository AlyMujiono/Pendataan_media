<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormas_m extends CI_Model {

    public function ormas_get_all()
    {
        $result = $this->db->get('ormas')
                            ->result();
        return $result;
    }

    public function ormas_get_all_active()
    {
        $result = $this->db->get_where('ormas', ['status'=>1])
                            ->result();
        return $result;
    }

    public function ormas_by_id($id)
    {
        $result = $this->db->where('id', $id)
                            ->get('ormas')
                            ->row();
        return $result;
    }

    public function anggota_by_ormas($id)
    {
        $result = $this->db->where('id_ormas', $id)
                            ->get('anggota_ormas')
                            ->result();
        return $result;
    }

    public function ormas_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('ormas');
    }

    public function ormas_update_data($post_data, $id)
    {
        return $this->db->where('id', $id)->update('ormas', $post_data);
    }

    public function ormas_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('ormas');
    }

    public function ormas_insert_anggota($post_data)
    {
        return $this->db->set($post_data)->insert('anggota_ormas');
    }

    public function anggota_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('anggota_ormas');
    }

    public function syarat_by_ormas($id)
    {
        $result = $this->db->where('id_ormas', $id)
                            ->get('syarat_ormas')
                            ->result();
        return $result;
    }

    public function ormas_insert_syarat($post_data)
    {
        return $this->db->set($post_data)->insert('syarat_ormas');
    }

    public function syarat_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('syarat_ormas');
    }

}
