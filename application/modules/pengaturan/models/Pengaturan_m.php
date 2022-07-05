<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_m extends CI_Model {
    
    public function perusahaan_by_id($id_perusahaan)
    {
        $result = $this->db->where('id_perusahaan', $id_perusahaan)
                            ->get('perusahaan')
                            ->row();
        return $result;
    }
    
    public function perusahaan_update_data($post_data, $id)
    {
        return $this->db->where('id_perusahaan', $id)->update('perusahaan', $post_data);
    }
    
    public function faq_get_all()
    {
        $result = $this->db->get('faq')->result();
        return $result;
    }
    
    public function faq_insert_data($post_data)
    {
        return $this->db->insert('faq', $post_data);
    }
    
    public function faq_update_data($post_data, $id)
    {
        return $this->db->where('id_faq', $id)->update('faq', $post_data);
    }
    
    public function faq_delete_data($id)
    {
        return $this->db->where('id_faq', $id)->delete('faq');
    }
    
}