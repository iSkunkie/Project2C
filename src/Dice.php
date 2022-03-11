<?php

namespace Proejct5;

class Dice
{
    private int $dice;
    private int $iceHoles = 0;
    private int $polarBears = 0;
    private int $penguins = 0;


    // functie voor 1 dobbelsteen
    public function dice()
    {
        $this->dice = random_int(1,6);

        //hiermee bepaal je de wakken, ijsberen en penguins
        if($this->dice == 1 || $this->dice == 3 || $this->dice = 5)
        {
            $this->iceHoles = 1;
            $this->polarBears = $this->dice -1;
            $this->penguins = 7 - $this->dice;
        }
        else {
            $this->iceHoles = $this->polarBears = $this->penguins = 0;
        }
    }

    public function getDice(): int
    {
        return $this->dice;
    }

    public function getIceHoles(): int
    {
        return $this->iceHoles;
    }

    public function getPolarBears(): int
    {
        return $this->polarBears;
    }

    public function getPenguins(): int
    {
        return $this->penguins;
    }

    public function draw() {
        if($this->dice== 1) {
            echo "<img src='dice1.png'>";
        }
    }
}