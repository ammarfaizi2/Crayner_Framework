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
		$this->db = new Database();
	}
}