<?php

namespace GamingSnail7410\ohno;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener(){

public function onEnable(){
  $this->getLogger()->info("hope this works!")
    
 }

public function onJoin(PlayerJoinEvent $event){
  $player = $event->getPlayer();
  $name = $player->getName();
  
  $this->getServer()->broadcastMessage("Hello $name, nice to see you!")
    
 }

}
