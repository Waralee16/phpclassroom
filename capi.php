<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
?>
