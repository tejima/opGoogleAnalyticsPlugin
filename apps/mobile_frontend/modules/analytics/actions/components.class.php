<?php
class analyticsComponents extends sfComponents
{

  public function executeCodeMobile()
  {
  }
/*
    // Copyright 2009 Google Inc. All Rights Reserved.

    $GA_PIXEL = "ga.php";
     // global $GA_ACCOUNT, $GA_PIXEL;
    $url = "/opMarketingPlugin/";
    $url .= $GA_PIXEL . "?";
    //
    $url .= "utmac=" . opConfig::get('marketing_config_ga_account');
    $url .= "&utmn=" . rand(0, 0x7fffffff);
    $referer = @$_SERVER["HTTP_REFERER"];
    $query = $_SERVER["QUERY_STRING"];
    $path = $_SERVER["REQUEST_URI"];
    if (empty($referer)) {
      $referer = "-";
    }
    $url .= "&utmr=" . urlencode($referer);
    if (!empty($path)) {
      $url .= "&utmp=" . urlencode($path);
    }
    $url .= "&guid=ON";
    $this->code_mobile =  str_replace("&", "&amp;", $url);
*/
}
