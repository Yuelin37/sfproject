<?php

/**
 * content actions.
 *
 * @package    20130621
 * @subpackage content
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contentActions extends sfActions
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
/*  
  public function executeShow()
  {
  	$today = getdate();
  	$this->hour = $today['hours'];
  }
*/  
  public function executeUpdate($request)
  {
  	$this->name = $request->getParameter('name');
  }
  
  public function executeNick($request)
  {
  	
  }
  
  public function executeFirstPage($request)
  {
  	$nickname = $request->getParameter('nickname');
  
  	// Store data in the user session
  	$this->getUser()->setAttribute('nickname', $nickname);
  	$this->forward('content', 'SecondPage');
  }
  
  public function executeSecondPage()
  {
  	// Retrieve data from the user session with a default value
  	$nickname = $this->getUser()->getAttribute('nickname', 'Anonymous Coward');
  	$this->nickname = $nickname;
  }
}
