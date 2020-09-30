<?php

namespace Feed;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class main extends PluginBase implements Listener {


    public function onEnable() {

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {

    switch($command->getName()){
      case "feed":
        if($sender instanceof Player){
           if($sender->hasPermission("feed.cmd")){
              $sender->sendMessage(TextFormat::GREEN . "Tu as bien été nourris!");
              $sender->setFood(20);
          }
        }
        break;
    }
    return true;
  }
}
