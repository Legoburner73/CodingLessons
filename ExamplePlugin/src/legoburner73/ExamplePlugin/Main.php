<?php

namespace legoburner73\ExamplePlugin;

use pocketmine\plugin\PluginBase as Base;
use pocketmine\event\Listener;

class Main extends Base implements Listener
{
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
}
