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

	public function executeContact($request)
	{
		// Define the form
		$this->form = new ContactForm();
		
		// Define the form
		$this->form->getWidgetSchema()->setNameFormat('contact[%s]');

		// Deal with the request
		if ($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter('contact'));
			if ($this->form->isValid())
			{
				// Handle the form submission
				$contact = $this->form->getValues();
				$name = $contact['name'];

				// Or to get a specific value
				$name = $this->form->getValue('name');

				$this->redirect('content/show');
			}
		}
	}
	
	public function executeNewArticle($request)
	{
		// Define the form
		$this->formNewArticle = new ArticleForm();
	
		// Define the form
		$this->formNewArticle->getWidgetSchema()->setNameFormat('article[%s]');
	
		// Deal with the request
		if ($request->isMethod('post'))
		{
			$this->formNewArticle->bind($request->getParameter('article'));
			if ($this->formNewArticle->isValid())
			{
				// Handle the form submission
				$article = $this->formNewArticle->save();

	
				$this->redirect('content/show');
			}
		}
	}
	
}
