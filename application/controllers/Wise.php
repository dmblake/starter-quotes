<?php
/**
 * application/controllers/Wise.php
 * Controller for feature #8
*/
class Wise extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	
	function bingo()
	{
		$record = $this->quotes->get(6);
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] = 'justone';
		$this->render();	
	}
}

// END Bingo.php
