<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_data_m extends CI_Model {

    var $table; //nama tabel dari database
    var $select; // default select
    var $column_order; //field yang ada di table user
    var $column_search; //field yang diizin untuk pencarian
    var $order; // default order
    var $condition; // default condition
    var $compare; // default compare
    var $join; // default join

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $post_search = $this->input->post('search');
        $post_order = $this->input->post('order');

        if(!empty($this->select))
        {
            $this->db->select(implode(',', $this->select));
        }

        $this->db->from($this->table);

        if(!empty($this->join))
        {
            foreach($this->join as $param){
                $this->db->join($param[0], $param[1], $param[2]);
            }
        }

        if(!empty($this->compare))
        {
            foreach($this->compare as $key => $val){
                if(!empty($val))
                  $this->db->where_in($key, $val);
            }
        }

        if(!empty($this->condition))
        {
            foreach($this->condition as $key => $val){
                if($val!='-' && $val!=''){
                  if($key=='string')
                    $this->db->where($val);
                  else
                    $this->db->where($key, $val);
                }
            }
        }

        $i = 0;
        foreach ($this->column_search as $item) // looping awal
        {
            if($post_search['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if($i===0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $post_search['value']);
                }
                else
                {
                    $this->db->or_like($item, $post_search['value']);
                }

                if(count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
        else if(isset($post_order))
        {
            $this->db->order_by($this->column_order[$post_order['0']['column']], $post_order['0']['dir']);
        }
    }

    public function data_config($dataConfig)
    {
        $this->table = $dataConfig['table'];
        if(isset($dataConfig['select']))
          $this->select = $dataConfig['select'];
        $this->column_order = $dataConfig['column_order'];
        $this->column_search = $dataConfig['column_search'];
        $this->order = $dataConfig['order'];
        if(isset($dataConfig['join']))
            $this->join = $dataConfig['join'];
        if(isset($dataConfig['condition']))
            $this->condition = $dataConfig['condition'];
        if(isset($dataConfig['compare']))
            $this->compare = $dataConfig['compare'];
    }

    public function get_datatables()
    {
        $post_length = $this->input->post('length');
        $post_start = $this->input->post('start');

        $this->_get_datatables_query();
        if($post_length != -1)
        $this->db->limit($post_length, $post_start);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

}
