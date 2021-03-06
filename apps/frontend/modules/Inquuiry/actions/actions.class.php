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
    $form = new InquiryForm();
    if ($request->isMethod(sfRequest::POST))
    {
      $form->bind($request->getParameter($form->getName()));
      if ($form->isValid())
      {
        $form->send($this->context, 'sample@example.com', 'Symfony楽団ホームページからのお問い合わせ');
        $this->getUser()->setAttribute('inquiry_send', true);
        $this->redirect('Inquuiry/Complete');
      }
    }
    $this->form = $form;
  }

  public function executeComplete(sfWebRequest $request)
  {
    $user = $this->getUser();
    $this->redirectUnless($user->getAttribute('inquiry_send'), 'Inquuiry/New');
    $user->setAttribute('inquiry_send', null);
  }
}
