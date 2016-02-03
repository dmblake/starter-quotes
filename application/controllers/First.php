<?php
/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}
        
        function zzz()
	{
            $this->data['pagebody'] = 'justone';
            $record = $this->quotes->get('1');
            $this->data = array_merge($this->data, $record);
            $this->render();
        }
        
	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';
		$record = $this->quotes->first();
		$this->data = array_merge($this->data, $record);
		$this->render();
	}

}

/* End of file First.php */
/* Location: application/controllers/First.php */