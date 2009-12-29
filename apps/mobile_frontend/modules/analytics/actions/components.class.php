<?php
class analyticsComponents extends sfComponents
{
  public function executeCodeMobile()
  {
    // Copyright 2009 Google Inc. All Rights Reserved.
    $GA_ACCOUNT = $op_config['opmarketingplugin_ga_account_mobile'];

    $GA_PIXEL = "ga.php";
     // global $GA_ACCOUNT, $GA_PIXEL;
    $url = "/opMarketingPlugin/";
    $url .= $GA_PIXEL . "?";
    //
    $url .= "utmac=" . $GA_ACCOUNT;
    $url .= "&utmn=" . rand(0, 0x7fffffff);
    $referer = $_SERVER["HTTP_REFERER"];
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
  }
}
