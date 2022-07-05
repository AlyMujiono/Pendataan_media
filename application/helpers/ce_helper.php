<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('ce_opsi')){
    function ce_opsi($kunci)
    {
        return cscoFunc($kunci);
    }
}

if(!function_exists('ce_set_opsi')){
    function ce_set_opsi($kunci, $nilai='')
    {
        return cscsoFunc($kunci, $nilai);
    }
}

if(!function_exists('ce_set_msg')){
    function ce_set_msg($item, $value)
    {
        return cscsmFunc($item, $value);
    }
}

if(!function_exists('ce_msg')){
    function ce_msg($item, $callout=false)
    {
        return cscmFunc($item, $callout);
    }
}

if(!function_exists('ce_date')){
    function ce_date()
    {
        return date('Y-m-d H:i:s');
    }
}

if(!function_exists('ce_num_format')){
    function ce_num_format($angka)
    {
        return number_format($angka, 0, ',', '.');
    }
}

if(!function_exists('ce_boolean')){
    function ce_boolean($int, $label='Tidak|Ya')
    {
        return cscbFunc($int, $label);
    }
}

if(!function_exists('ce_ikon_boolean')){
    function ce_ikon_boolean($int)
    {
        return cscibFunc($int);
    }
}

if(!function_exists('ce_hak_akses')){
    function ce_hak_akses($user_akses)
    {
        cschaFunc($user_akses);
    }
}

if(!function_exists('show_403')){
    function show_403()
    {
        show_error("Akses ditolak, Anda tidak memiliki izin untuk mengakses.", 403, "403 Forbidden");
        exit;
    }
}

if(!function_exists('show_401')){
    function show_401()
    {
        show_error("Akses ditolak, Anda tidak memberikan otentikasi yang benar.", 401, "401 Unauthorized");
        exit;
    }
}

if(!function_exists('show_400')){
    function show_400()
    {
        show_error("Anda membutuhkan koneksi internet untuk menjalankan aplikasi ini.", 400, "400 Bad Request");
        exit;
    }
}

if(!function_exists('ce_get_hak_akses')){
    function ce_get_hak_akses($id_level)
    {
        return cscghaFunc($id_level);
    }
}

if(!function_exists('ce_count_duplicate_array')){
    function ce_count_duplicate_array($array1, $array2)
    {
        return csccdaFunc($array1, $array2);
    }
}

if(!function_exists('ce_anchor')){
    function ce_anchor($user_akses, $uri='', $title='', $attributes='')
    {
        return cscaFunc($user_akses, $uri, $title, $attributes);
    }
}

if(!function_exists('ce_button')){
    function ce_button($user_akses, $type='button', $label='', $attributes='')
    {
        return cscbFunc($user_akses, $type, $label, $attributes);
    }
}

if(!function_exists('ce_active_menu')){
    function ce_active_menu($access_code)
    {
        cscamFunc($access_code);
    }
}

if(!function_exists('ce_nav_menu')){
    function ce_nav_menu($menu)
    {
        return cscnmFunc($menu);
    }
}

if(!function_exists('ce_code_generator')){
    function ce_code_generator($table, $key, $prefix)
    {
        return csccgFunc($table, $key, $prefix);
    }
}

if(!function_exists('ce_hari_indo')){
    function ce_hari_indo($int)
    {
        return cschiFunc($int);
    }
}

if(!function_exists('ce_bulan_indo')){
    function ce_bulan_indo($int)
    {
        return cscbiFunc($int);
    }
}

if(!function_exists('ce_tanggal_indo')){
    function ce_tanggal_indo($string)
    {
        return csctiFunc($string);
    }
}

if (!function_exists('toInt')) {
    function toInt($str)
    {
        return (int) preg_replace("/\..+$/i", "", preg_replace("/[^0-9\.]/i", "", $str));
    }
}