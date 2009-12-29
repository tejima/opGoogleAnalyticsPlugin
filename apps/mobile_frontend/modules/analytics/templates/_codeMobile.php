<?php
function executeCodeMobile($code)
{
  $url = "/opMarketingPlugin/";
  $url .= "ga.php?";
  //
  $url .= "utmac=" . $code;
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
  return $url;
}

?>
<img src="<?php echo executeCodeMobile( Doctrine::getTable('SnsConfig')->get('opmarketingplugin_ga_account_mobile', 'none')); ?>" />
