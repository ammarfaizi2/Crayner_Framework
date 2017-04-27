<?php
namespace System;
use System\Crayner_Core;
use System\Uri_Segment;
/**
*
*		@author Ammar Faizi <ammarfaizi2@gmail.com>
*		@license RedAngel PHP Concept
*
*/
class Crayner extends CraynerCore
{
	private $uri;
	private $class;
	private $method;
	public function __construct()
	{
		/**
		* Ambil REQUEST_URI (array)
		*/
		$this->uri = Uri_Segment::getUriSegments();
		
		/**
		* Ambil Segment URI [1] (class)
		*/
		$this->class = Uri_Segment::getUriSegment(1,$this->uri);
		
		/**
		* Ambil Segment URI [2] (method)
		*/
		$this->method = Uri_Segment::getUriSegment(2,$this->uri);
	}
	
	/**
	*		Void
	*		Jalankan Crayner
	*/
	public function run()
	{
		
	}
}