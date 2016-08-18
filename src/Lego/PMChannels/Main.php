<?php

namespace Lego\PMChannels;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerChatEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
   public $rp1;
   public $rp2;
   public $rp3;
   public $staff;
   public $temp;
   public function onEnable() {
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   
   public function ChatEvent(PlayerChatEvent, $event) {
      $player = $event->getPlayer()->getName();
      if(isset($this->rp1[$player])) {
         
      }
   }
}
