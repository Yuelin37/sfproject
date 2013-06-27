<?php

/**
 * content actions.
 *
 * @package    20130621
 * @subpackage content
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class showAction extends sfAction
{
 
  
  public function execute($request)
  {
  	$today = getdate();
  	$this->hour = $today['hours'];
  }
  
}
