<?php

class curlClass {

  public $service_url = 'https://rickandmortyapi.com/api/character/1';


  public function connectApi()
  {
    $curl = curl_init ($this->service_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $curl_response = curl_exec($curl);
    $curl_response = json_decode($curl_response, true);
    curl_close($curl);

    return $curl_response;
  }



}








?>
