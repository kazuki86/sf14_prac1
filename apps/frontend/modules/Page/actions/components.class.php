<?php

class PageComponents extends sfComponents
{
  public function executeListLatestNews()
  {
    $this->pageList = PageTable::getInstance()->createQuery('p')
      ->where('p.category = ?', 'news')
      ->limit(5)
      ->execute();
  }
}
