<?php
  $mensagem = "Mensagem criptografada";
  $algoritmo = "AES-256-CBC";
  $chave = "Redragon"
  $xy = "i19dn3jg8shane2o";

  $mensagem = openssl_encrypt($mensagem, $algoritmo, $chave, OPENSSL_RAW_DATA, $xy);
  $str_msg = base64_encode($mensagem)
  echo "Senha: " . $xy . "<br>";
  echo "Mensagem criptografada: " . $str_msg . "<br>";
  $mensagem = openssl_decrypt(base64_decode($str_msg), $algoritmo, $chave, OPENSSL_RAW_DATA, $xy);
  echo "Mensagem descriptografada: " . $mensagem . "<br>";
?>
  
