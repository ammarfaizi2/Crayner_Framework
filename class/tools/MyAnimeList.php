<?php
namespace tools;
use Crayner_Machine;
/**
* @author Ammar F. <ammarfaizi2@gmail.com> https://www.facebook.com/ammarfaizi2
* @license RedAngel PHP Concept 2017
* @package tools
*/
class MyAnimeList extends Crayner_Machine
{
	private $option;
	public function __construct($user,$pass)
	{
		$this->option = array(CURLOPT_USERPWD=>"{$user}:{$pass}",CURLOPT_CONNECTTIMEOUT=>30);
	}
	public function search($query)
	{
		$a = simplexml_load_string($this->qurl("https://myanimelist.net/api/anime/search.xml?q=".urlencode($query),null,null,$this->option,null));
		return $a;
	}

}
?>