<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_m extends CI_Model {

    public function media_get_all()
    {
        $result = $this->db->get('media')
                            ->result();
        return $result;
    }

    public function media_get_all_active()
    {
        $result = $this->db->get_where('media', ['status'=>1])
                            ->result();
        return $result;
    }

    public function media_by_id($id)
    {
        $result = $this->db->where('id', $id)
                            ->get('media')
                            ->row();
        return $result;
    }

    public function anggota_by_media($id)
    {
        $result = $this->db->where('id_media', $id)
                            ->get('anggota_media')
                            ->result();
        return $result;
    }

    public function media_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('media');
    }

    public function media_update_data($post_data, $id)
    {
        return $this->db->where('id', $id)->update('media', $post_data);
    }

    public function media_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('media');
    }

    public function media_insert_anggota($post_data)
    {
        return $this->db->set($post_data)->insert('anggota_media');
    }

    public function anggota_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('anggota_media');
    }

    public function syarat_by_media($id)
    {
        $result = $this->db->where('id_media', $id)
                            ->get('syarat_media')
                            ->result();
        return $result;
    }

    public function media_insert_syarat($post_data)
    {
        return $this->db->set($post_data)->insert('syarat_media');
    }

    public function syarat_delete_data($id)
    {
        return $this->db->where('id', $id)->delete('syarat_media');
    }

}
