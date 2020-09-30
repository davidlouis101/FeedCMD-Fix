<?php

namespace Feed;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener {


    public function onEnable() {

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {

        if ($sender instanceof Player){

        if ($sender->getName() == "feed") {

            $sender->sendMessage("§aTu as bien été nourris!");
            $sender->setFood(20);
        }
        break;
        }

        return true;

    }
}
