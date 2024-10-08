<?php

namespace Luthfi\VanishX;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use Luthfi\VanishX\VanishX;

class EventListener implements Listener {

    private $plugin;

    public function __construct(VanishX $plugin) {
        $this->plugin = $plugin;
    }

    public function onJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        if ($this->plugin->isVanished($player)) {
            $event->setJoinMessage("");
        }
    }

    public function onQuit(PlayerQuitEvent $event): void {
        $player = $event->getPlayer();
        if ($this->plugin->isVanished($player)) {
            $event->setQuitMessage("");
        }
    }
}
