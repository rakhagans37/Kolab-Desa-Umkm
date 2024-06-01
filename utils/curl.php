<?php
function get_data_api($url, $debug = false)
{
  // Inisialisasi curl
  $ch = curl_init($url);

  // Set options
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json'
  ));

  // Eksekusi request
  $result = curl_exec($ch);

  // Tutup curl
  curl_close($ch);

  // Decode JSON
  $data = json_decode($result, true);

  // Dumb data with pre
  if ($debug) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
  }

  return $data;
}
