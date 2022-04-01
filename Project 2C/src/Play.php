<?php

namespace Proejct5;

class Play
{
    private string $name;
    private GameList $gameList;
    private HintList $hintList;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->gameList = new GameList();
    }


    public function addGame(Game $game)
    {
        $this->gameList->addGame($game);
    }

    public function draw()
    {


    }

}