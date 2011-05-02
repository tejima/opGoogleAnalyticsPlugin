<?php
class analyticsComponents extends sfComponents
{

  public function executeCodeMobile()
  {
    $this->mo = Doctrine::getTable('SnsConfig')->get('opmarketingplugin_ga_account_mobile', 'none');
  }
}
