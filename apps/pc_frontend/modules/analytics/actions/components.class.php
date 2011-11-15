<?php
class analyticsComponents extends sfComponents
{
  public function executeCodePC()
  {
    $this->ua = Doctrine::getTable('SnsConfig')->get('opgoogleanalyticsplugin_ga_account', 'none');
  }
}
