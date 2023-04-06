<?php

declare(strict_types=1);

namespace skyss0fly\DevHealthPM4;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\timings\TimingsHandler;


class Main extends PluginBase{
	
	private bool $debugMode = true;
	
	public function onLoad(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::GOLD . "DevHealthPM4 Has Successfully loaded");
		}
	}
	
	public function onEnable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::AQUA . "Make sure to Take breaks when developing!");
		}
	}
	
	public function onDisable(): void {
		if ($this->debugMode) {
			$this->getLogger()->info(TextFormat::BLUE . "Goodbye!!");
		}
	}
}

//class Timing extends TimingsHandler {

//this->getLogger()->info(TextFormat::Aqua . "Have you recently took a break?");
// }
