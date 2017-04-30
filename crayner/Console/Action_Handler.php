<?php
namespace Console;

class Action_Handler
{
	private $cmd;
	public function __construct($cmd)
	{
		$this->cmd = $cmd;
	}
	public function make($type,$filename)
	{
		switch($type){
			case 'model':
				$tpl = __DIR__.'/Repository/model.ice'
				if(!file_exists($tpl))
				$a = str_replace("•••model•••",$filename,file_get_contents($tpl));
		}
	}
	private function ckfile($file)
	{
		file_exists($file) or die("\n\nError !\nCould not open input file: ".$file."\n\n");
	}
	public function run()
	{
		switch($this->cmd[1]){
		case 'make:controller':
			return $this->make('controller',$this->cmd[2]);
			break;
		case 'make:model':
				return $this->make('model',$this->cmd[2]);
				break;
		default:
				return "\nUnknown Command !\n\n";
				break;
		}
	}
}