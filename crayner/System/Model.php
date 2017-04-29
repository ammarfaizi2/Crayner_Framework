<?php
namespace System;
use System\CraynerCore;

class Model extends CraynerCore
{
	public function __construct()
	{
		parent::__construct();
	}
	protected function db()
	{
		require __DIR__.'/../App/Config/database.php';
		$this->db = new Database($cf);
	}
}