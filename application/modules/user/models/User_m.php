<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

    public function user_get_all()
    {
        $result = $this->db->join('level', 'level.id_level=user.id_level', 'left')
            ->get('user')
            ->result();
        return $result;
    }

    public function user_cek_login($username, $password)
    {
        $result = $this->db->join('level', 'level.id_level=user.id_level', 'left')
            ->where('user.username', $username)
            ->where('user.password', $password)
            ->get('user')
            ->row();
        return $result;
    }

    public function user_by_id($id_user)
    {
        $result = $this->db->join('level', 'level.id_level=user.id_level', 'left')
            ->where('user.id_user', $id_user)
            ->get('user')
            ->row();
        return $result;
    }

    public function user_insert_data($post_data)
    {
        return $this->db->set($post_data)->insert('user');
    }

    public function user_update_data($post_data, $id)
    {
        return $this->db->where('id_user', $id)->update('user', $post_data);
    }

    public function user_delete_data($id)
    {
        return $this->db->where('id_user', $id)->delete('user');
    }
}
