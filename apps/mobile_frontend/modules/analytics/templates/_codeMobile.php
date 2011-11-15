<?php

if('none' !== $mo)
{

  $url = "/opGoogleAnalyticsPlugin/";
  $url .= "ga.php?";
  
  $url .= "utmac=" . $mo;
  $url .= "&utmn=" . rand(0, 0x7fffffff);
  $referer = $sf_request->getReferer();
  $path = $sf_request->getUri();
  if (empty($referer)) {
    $referer = "-";
  }
  $url .= "&utmr=" . urlencode($referer);
  if (!empty($path)) {
    $url .= "&utmp=" . urlencode($path);
  }
  $url .= "&guid=ON";
  
  
  echo image_tag($url);
}
