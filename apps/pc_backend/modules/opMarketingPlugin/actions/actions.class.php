<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opAuthMailAddressPlugin actions.
 *
 * @package    OpenPNE
 * @subpackage opAuthMailAddressPlugin
 * @author     Kousuke Ebihara <ebihara@tejimaya.com>
 */
class opMarketingPluginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new MarketingPluginConfigForm();
    
    if ($request->isMethod(sfWebRequest::POST))
    {
      $this->form->bind($request->getParameter('marketing_config'));
      if ($this->form->isValid())
      {
        $this->form->save();
        $this->redirect('opMarketingPlugin/index');
      }
    }
  }
}
