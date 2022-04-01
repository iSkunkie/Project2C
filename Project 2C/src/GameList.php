<?php

namespace Proejct5;

class GameList
{
    private array $games = [];

    public function addGame(Game $game)
    {
        $this->games[] = $game;
    }

    public function getGame()
    {
        return $this->games = [];
    }

    public function getCurrentGame()
    {
    }



}