<?php
class GoogleAnalyticsPluginConfigForm extends sfForm
{
  protected $configs = array(
    'ga_account'   => 'googleanalyticsplugin_ga_account',
    'ga_account_mobile'   => 'googleanalyticsplugin_ga_account_mobile',
  );
  public function configure()
  {

    $this->setWidgets(array(
      'ga_account' => new sfWidgetFormInput(),
      'ga_account_mobile' => new sfWidgetFormInput(),
    ));
    $this->setValidators(array(
      'ga_account' => new sfValidatorString(array(),array()),
      'ga_account_mobile' => new sfValidatorString(array(),array()),
    ));

    $this->widgetSchema->setHelp('ga_account', 'GoogleAnalyticsのアカウント番号UA-XXXXXXX-XXを入力してください。');
    $this->widgetSchema->setHelp('ga_account_mobile', 'GoogleAnalyticsのモバイル版アカウント番号MO-XXXXXXX-XXを入力してください。');

    foreach ($this->configs as $k => $v)
    {
      $config = Doctrine::getTable('SnsConfig')->retrieveByName($v);
      if ($config)
      {
        $this->getWidgetSchema()->setDefault($k, $config->getValue());
      }
    }

    $this->getWidgetSchema()->setNameFormat('googleanalytics_config[%s]');
  }

  public function save()
  {
    foreach ($this->getValues() as $k => $v)
    {
      if (!isset($this->configs[$k]))
      {
        continue;
      }

      $config = Doctrine::getTable('SnsConfig')->retrieveByName($this->configs[$k]);
      if (!$config)
      {
        $config = new SnsConfig();
        $config->setName($this->configs[$k]);
      }
      $config->setValue($v);
      $config->save();
    }
  }
  public function validate($validator,$value,$arguments = array()){
    return $value;
  }
}
