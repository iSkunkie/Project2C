<?php

namespace Proejct5;


class DiceList
{
    private array $dices = [1, 2, 3 ,4, 5, 6];

    public function addDice(Dice $dice)
    {
        $this->dices[] = $dice;
    }

    public function getDices(): array
    {
        return $this->dices;
    }
}
