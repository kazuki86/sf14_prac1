<?php

class PageComponents extends sfComponents
{
  public function executeListLatestNews()
  {
    //$this->pageList = PageTable::getInstance()->createQuery('p')
      //->where('p.category = ?', 'news')
      //->limit(5)
      //->execute();

    $pager = new sfDoctrinePager('Page', 5);
    $pager->setQuery(PageTable::queryLatestNews());
    $pager->setPage(1);
    $pager->init();
    $this->latestNewsPager = $pager;
  }
}
