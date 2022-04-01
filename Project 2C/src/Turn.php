<?php

namespace Proejct5;

class Turn
{
    private int $guessiceHoles;
    private int $guessPolarBears;
    private int $guessPenguins;


    public function getGuessIceHoles()
    {
        return $this->guessiceHoles;
    }

    public function getGuessPolarBears()
    {
        return $this->guessPolarBears;
    }

    public function getGuesPenguins()
    {
        return $this->guessPenguins;
    }
}