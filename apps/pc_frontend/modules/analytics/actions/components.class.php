<?php
class analyticsComponents extends sfComponents
{
  public function executeCodePC()
  {
    $this->ua = Doctrine::getTable('SnsConfig')->get('opmarketingplugin_ga_account', 'none');
  }
}
