<?php

$telefono =  ["996007530", "996323059", "980125279", "996487356"];


foreach($telefono as $i ){




$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ultramsg.com/instance20523/messages/chat",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "token=794vu4qfqicmoht4&to=+593".$i."&body=WhatsApp API on UltraMsg.com works good, confirmar este mensaje&priority=10&referenceId=",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

}