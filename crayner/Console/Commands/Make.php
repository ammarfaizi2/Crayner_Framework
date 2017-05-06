<?php
namespace Console\Commands;

defined('REPODIR') or die('REPODIR not defined !');
use Console\ConsoleCore;
use Console\Message;
/**
* @author Ammar Faizi <ammarfaizi2@gmail.com>
*/
class Make extends ConsoleCore
{

	private $what;
	private $file;
	private $option;
	public function __construct($what,$file,$option=null)
	{
		$this->what = $what;
		$this->file = $file;
		$this->option = $option;
	}
	public function run()
	{
		return $this->($this->what)($file,$option);		
	}
	private function controller($file,$option=null)
	{
		$fileloc = APPDIR.'Controllers/'.$file.'.php';
		if (file_exists($fileloc)) {
			return Message::Error("Controller {$file} sudah ada !");
		}
		file_put_contents($fileloc,str_replace('•••controller•••',$file,file_get_contents(REPODIR.'controller.ice')));
	}
}