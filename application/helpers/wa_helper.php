<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('kirim_pesan')){
  function kirim_pesan($no_telp, $pesan)
  {
      $url = 'https://waysender-v2.ridped.com/apiv2/send-message.php';
      $no_telp = str_replace ('+', '', $no_telp) ;
      $no_telp = str_replace (' ', '', $no_telp) ;
      if (substr($no_telp, 0, 1) == '0' ) { $no_telp = '62' . substr($no_telp,1,30) ; }

      $postData = [
        'api_key' => '165329ea1ff5c5ecbdbbeef',
        'sender' => '62895711670109',
        'number' => $no_telp,
        'message' => $pesan
      ];

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_ENCODING, '');
      curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
      curl_setopt($ch, CURLOPT_TIMEOUT_MS, 0);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
      curl_setopt($ch, CURLOPT_URL, $url);
      //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0););
      curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
  }
}
