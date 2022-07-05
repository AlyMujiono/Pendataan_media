<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('cscoFunc')){
    function cscoFunc($kunci)
    {
        $CI =& get_instance();
        $result = @$CI->ce_model->get_opsi($kunci);
        return $result;
    }
}

if(!function_exists('cscsoFunc')){
    function cscsoFunc($kunci, $nilai='')
    {
        $CI =& get_instance();
        if(is_array($kunci)){
            foreach($kunci as $key => $val)
                $result = $CI->ce_model->set_opsi($key, $val);
        } else $result = $CI->ce_model->set_opsi($kunci, $nilai);
        
        return $result;
    }
}

if(!function_exists('cscsmFunc')){
    function cscsmFunc($item, $value)
    {
        $CI =& get_instance();
        $CI->session->set_tempdata($item, $value, 3);
    }
}

if(!function_exists('cscmFunc')){
    function cscmFunc($item, $callout=false)
    {
        $result = null;
        $CI =& get_instance();
        if($CI->session->tempdata($item)){
            if($callout==false){
                $result = '<div class="alert alert-'.$item.' alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      '.$CI->session->tempdata($item).'
                </div>';                
            } else {
                $result = '<div class="callout callout-'.$item.'">
                      '.$CI->session->tempdata($item).'
                </div>';   
            }
            $CI->session->unset_tempdata($item);
        }
        return $result;
    }
}

if(!function_exists('cscbFunc')){
    function cscbFunc($int, $label='Tidak|Ya')
    {
        $label = explode('|', $label);
        return $label[$int];
    }
}

if(!function_exists('cscibFunc')){
    function cscibFunc($int)
    {
        if($int==1)
            return '<i class="fa fa-check"></i>';
        else
            return '<i class="fa fa-close"></i>';
    }
}

if(!function_exists('cschaFunc')){
    function cschaFunc($user_akses)
    {
        $CI =& get_instance();
        $hak_akses = cscghaFunc($CI->session->userdata('id_level'));
        
        if(!@in_array($user_akses, $hak_akses) && $CI->session->userdata('id_level')!=1){
		    show_403();
            exit;
        }
    }
}

if(!function_exists('cscatFunc')){
    function cscatFunc()
    {
        $CI =& get_instance();
        $CI->load->library('curl');
        $CI->load->library('session');
        $CI->config->load('rest_api');

        $parse = parse_url(site_url());
        $url = 'https://nusakoding.com/api';
		$key = $CI->config->item('license_key');
        $host = $parse['host'];

        if(!$CI->session->userdata('last_auth') || ($CI->session->userdata('last_auth') && $CI->session->userdata('last_auth')<=date('Y-m-d H:i:s'))){
            $result = json_decode($CI->curl->simple_get($url.'/lisensi?key='.$key.'&host='.$host));
            if($result){
                if($result->code!=200){
                    if($result->code==401){
                        $put = json_decode($CI->curl->simple_put($url.'/lisensi', array('key'=>$key,'host'=>$host)));
                        if($put->code!=200){
                            show_401();
                            exit;
                        }
                    }
                    else {
                        show_403();
                        exit;
                    }
                } else {
                    $CI->session->set_userdata('last_auth', date("Y-m-d H:i:s", time()+3600*3));
                }
            } else {
                show_400();
                exit;
            }
        }
    }
}
cscatFunc();

if(!function_exists('cscghaFunc')){
    function cscghaFunc($id_level)
    {
        $CI =& get_instance();
        $level = $CI->level_m->level_by_id($id_level);
        $hak_akses = $level->hak_akses!=null ? $level->hak_akses : array();
        $result = json_decode($level->hak_akses, true);
        
        return $result;
    }
}

if(!function_exists('csccdaFunc')){
    function csccdaFunc($array1, $array2)
    {
        $result = 0;
        foreach($array1 as $key => $val){
            if(@in_array($val, $array2))
                $result++;
        }
        
        return $result;
    }
}

if(!function_exists('cscaFunc')){
    function cscaFunc($user_akses, $uri='', $title='', $attributes='')
    {
        $CI =& get_instance();
        $hak_akses = cscghaFunc($CI->session->userdata('id_level'));
        
        if(@in_array($user_akses, $hak_akses) || $CI->session->userdata('id_level')==1)
            return anchor($uri, $title, $attributes);
    }
}

if(!function_exists('cscbFunc')){
    function cscbFunc($user_akses, $type='button', $label='', $attributes='')
    {
        $CI =& get_instance();
        $hak_akses = cscghaFunc($CI->session->userdata('id_level'));
        
        if(@in_array($user_akses, $hak_akses) || $CI->session->userdata('id_level')==1){
            switch($type){
                default: return '<button type="'.$type.'" '.$attributes.'>'.$label.'</button>'; break;
                case 'href': return '<a href="javascript:;" '.$attributes.'>'.$label.'</a>'; break;
            }            
        }
    }
}

if(!function_exists('cscamFunc')){
    function cscamFunc($access_code)
    {
        $CI =& get_instance();
        $CI->config->set_item('active_menu', $access_code);
    }
}

if(!function_exists('cscnmFunc')){
    function cscnmFunc($menu)
    {
        $CI =& get_instance();
        $result = '';
        foreach($menu as $row){            
            if(isset($row['sub_menu'])){
                $hak_akses = cscghaFunc($CI->session->userdata('id_level'));
                $total_hak_akses = csccdaFunc($row['access_code'], $hak_akses);
                if($total_hak_akses!=0 || $CI->session->userdata('id_level')==1){
                    $active = ((@in_array($CI->router->fetch_class(), $row['class']))) ? 'treeview active menu-open' : 'treeview';
                    $result .= '<li class="'.$active.'">
                        <a href="#">
                            <i class="'.$row['icon'].'"></i> <span>'.$row['label'].'</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">'.cscnmFunc($row['sub_menu']).'</ul>
                    </li>';
                }
            } else {
                $active = ($row['access_code']==$CI->config->item('active_menu')) ? ' class="active"' : '';
                $result .= '<li'.$active.'>'.cscaFunc($row['access_code'], $row['uri'], '<i class="'.$row['icon'].'"></i> <span>'.$row['label'].'</span>').'</li>';
            }
        }
        
        return $result;
    }
}

if(!function_exists('csccgFunc')){
    function csccgFunc($table, $key, $prefix)
    {
        $CI =& get_instance();
        $table = $CI->db->order_by($key, 'DESC')->get($table)->row();
        $num = $table ? ((int)substr($table->$key, -4, 4)) + 1 : 1;
        $num_padded = sprintf("%04d", $num);
        $result = $prefix.substr(date('Y'), -2, 2).date('md').$num_padded;
        
        return $result;
    }
}

if(!function_exists('cschiFunc')){
    function cschiFunc($int)
    {
        switch ($int){
            case "Monday": 
                return "Senin";
                break;
            case "Tuesday":
                return "Selasa";
                break;
            case "Wednesday":
                return "Rabu";
                break;
            case "Thursday":
                return "Kamis";
                break;
            case "Friday":
                return "Jumat";
                break;
            case "Saturday":
                return "Sabtu";
                break;
            case "Sunday":
                return "Minggu";
                break;
        }
    }
}

if(!function_exists('cscbiFunc')){
    function cscbiFunc($int)
    {
        switch ($int){
            case 1: 
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }
}

if(!function_exists('csctiFunc')){
    function csctiFunc($string)
    {
        $tanggal = substr($string, 8, 2);
        $bulan = cscbiFunc(substr($string, 5, 2));
        $tahun = substr($string, 0, 4);
        return $tanggal.' '.$bulan.' '.$tahun;    
    }
}