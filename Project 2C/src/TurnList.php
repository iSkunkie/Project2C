<?php

namespace Proejct5;

class TurnList
{
    private array $turns = [];

    public function addTurn(Turn $turn)
    {
        $this->turns[] = $turn;
    }

    public function getTurns()
    {
        return $this->turns[];
    }

    public function getAmountTurns()
    {
        return $this->;
    }
}