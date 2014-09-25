<?php

/**
 * Inquuiry actions.
 *
 * @package    prac1
 * @subpackage Inquuiry
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InquuiryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeNew(sfWebRequest $request)
  {
     
  }
}
