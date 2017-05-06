<?php
namespace Console;

class ActionHandler
{
    private $cmd;
    public function __construct($cmd)
    {
        $this->cmd = $cmd;
    }
    public function make($type, $name)
    {
        switch ($type) {
            case 'model':
                $tpl = __DIR__.'/Repository/model.ice';
                $to = __DIR__.'/../App/Models/'.$name.'.php';
                file_exists($to) and die("\n\n{$name} model already exists !\n\n");
                $this->ckfile($tpl);
                            file_put_contents($to, str_replace("•••model•••", $name, file_get_contents($tpl)));
                file_exists($to) and die("\n\nModel berhasil dibuat !\n\n{$to}\n") or die("\n\nModel berhasil dibuat !\n\n");
            break;
            case 'controller':
                $tpl = __DIR__.'/Repository/controller.ice';
                $to = __DIR__.'/../App/Controllers/'.$name.'.php';
                $msg = file_exists($to) ? ("\n\nController {$name} sudah ada !\n\n") : null;
                $this->ckfile($tpl);
                if ($msg===null) {
                    file_put_contents($to, str_replace("•••controller•••", $name, file_get_contents($tpl)));
                    $msg = file_exists($to) ? "\n\nController berhasil dibuat !\n\n{$to}\n" : "\n\nController gagal dibuat !\n\n";
                }
            break;
            default:

            break;
        }
    }
    private function ckfile($file)
    {
        file_exists($file) or die("\n\nError !\nCould not open input file: ".$file."\n\n");
    }
    public function run()
    {
        switch ($this->cmd[1]) {
        case 'make:controller':
            return $this->make('controller', $this->cmd[2]);
            break;
        case 'make:model':
                return $this->make('model', $this->cmd[2]);
                break;
        default:
                return "\nUnknown Command !\n\n";
                break;
        }
    }
}
