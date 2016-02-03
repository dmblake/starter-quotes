<?php

/**
 * Welcome page for the last folder.
 * Will display the last quote in the database.
 */
class Welcome extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------
	function index()
	{
		$this->data['pagebody'] = 'justone';
		$record = $this->quotes->last();
		$this->data = array_merge($this->data, $record);
		$this->render();
	}
}
/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */
