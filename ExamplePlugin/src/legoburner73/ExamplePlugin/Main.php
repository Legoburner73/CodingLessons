<?php

namespace legoburner73\ExamplePlugin;

use pocketmine\plugin\PluginBase as Base;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends Base implements Listener
{
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()) === "test"){
            $sender->sendMessage("Yay.. command worked as normal user!");
            return true;
        }
        return false;
    }
}
