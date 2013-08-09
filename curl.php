<?php
  // define the URL to load
  $url = 'http://cricket.yahoo.com/player-profile/Sachin-Tendulkar_2962';
  // start cURL
  $ch = curl_init();
  // tell cURL what the URL is
  curl_setopt($ch, CURLOPT_URL, $url);
  // tell cURL that you want the data back from that URL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // run cURL
  $output = curl_exec($ch);
  // end the cURL call (this also cleans up memory so it is
  // important)
  curl_close($ch);
  // display the output
  echo $output;
?>
