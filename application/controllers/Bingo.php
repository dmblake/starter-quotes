<?php
/**
 * application/controllers/Bingo.php
 * Controller for feature #7
*/
class Bingo extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$record = $this->quotes->get(5);
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] = 'justone';
		$this->render();	
	}
}

// END Bingo.php
