<?php

declare(strict_types=1);

namespace skyss0fly\DevHealth;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\timings\TimingsHandler;
use pocketmine\server;

class Main extends PluginBase{
	
	private bool $debugMode = true;
	
	public function onLoad(): void {
			$this->getLogger()->info(TextFormat::GOLD . "DevHealth Has Successfully loaded");
		
	}
	
	public function onEnable(): void {
		
			$this->getLogger()->info(TextFormat::AQUA . "Make sure to Take breaks when developing!");
		
	}
	
	public function onDisable(): void {
		
			$this->getLogger()->info(TextFormat::BLUE . "Goodbye!!");
		
	}
        public function timedmessage(): void{
		do {
	$this->getServer()->broadcastMessage('Have you recently taken a break?')
		wait(300)
		} while($this->pluginEnabled());
		
	}
