<?php
namespace TDroidd\ItemCMD;

use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerItemHeldEvent;

class Main extends PluginBase implements Listener{
    public function onEnable() {
        	$this->saveDefaultConfig();
		$this->reloadConfig();
	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
	    $this->getLogger()->info(TextFormat::AQUA . "ItemCMD" . TextFormat::RED . " -> " . TextFormat::GREEN . "Enabled");
    }

    public function onHeld(PlayerItemHeldEvent $event){
                $cfg = $this->getConfig();
                $playername = $event->getPlayer()->getName();
                $item = $event->getItem()->getId();
                
            if($item === $cfg->get("Item-1") and $cfg->get("Enable-1") == true){
            foreach($cfg->get("Command-1") as $cmd1) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd1));	
            }
            }elseif($item === $cfg->get("Item-2") and $cfg->get("Enable-2") == true){
            foreach($cfg->get("Command-2") as $cmd2) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd2));	
            }
            }elseif($item === $cfg->get("Item-3") and $cfg->get("Enable-3") == true){
            foreach($cfg->get("Command-3") as $cmd3) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd3));	
            }
            }elseif($item === $cfg->get("Item-4") and $cfg->get("Enable-4") == true){
            foreach($cfg->get("Command-4") as $cmd4) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd4));	
            }
            }elseif($item === $cfg->get("Item-5") and $cfg->get("Enable-5") == true){
            foreach($cfg->get("Command-5") as $cmd5) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd5));	
            }
            }elseif($item === $cfg->get("Item-6") and $cfg->get("Enable-6") == true){
            foreach($cfg->get("Command-6") as $cmd6) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd6));	
            }
            }elseif($item === $cfg->get("Item-7") and $cfg->get("Enable-7") == true){
            foreach($cfg->get("Command-7") as $cmd6) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd7));	
            }
            }elseif($item === $cfg->get("Item-8") and $cfg->get("Enable-8") == true){
            foreach($cfg->get("Command-8") as $cmd6) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd8));	
            }
            }elseif($item === $cfg->get("Item-9") and $cfg->get("Enable-9") == true){
            foreach($cfg->get("Command-9") as $cmd6) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd9));	
            }
            }elseif($item === $cfg->get("Item-10") and $cfg->get("Enable-10") == true){
            foreach($cfg->get("Command-10") as $cmd6) {
            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $playername, $cmd10));	
            }
            }
}
    public function onDisable() {
        	$this->saveDefaultConfig();
		$this->reloadConfig();
	    $this->getLogger()->info(TextFormat::AQUA . "ItemCMD" . TextFormat::RED . " -> " . TextFormat::YELLOW . "Disable");
    }

}
