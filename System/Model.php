<?php
namespace System;
use System\Core;

class Model extends Core
{
	protected $db;
	public function db()
	{
		$this->db = parent::db();
	}
}