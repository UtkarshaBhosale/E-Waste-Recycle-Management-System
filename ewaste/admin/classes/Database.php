<?php

class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "ewaste");
		return $this->con;
	}
}

?>