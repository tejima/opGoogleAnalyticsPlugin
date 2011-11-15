<?php
class analyticsComponents extends sfComponents
{

  public function executeCodeMobile()
  {
    $this->mo = Doctrine::getTable('SnsConfig')->get('opgoogleanalyticsplugin_ga_account_mobile', 'none');
  }
}
