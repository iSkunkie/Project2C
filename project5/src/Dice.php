<?php

namespace Proejct5;

class Dice
{
    private int $dice = 1;
    private int $iceHoles = 0;
    private int $polarBears = 0;
    private int $penguins = 0;

    // function __construct()
    //{
    //    $this->throwDice();
    //}

    // functie voor 1 dobbelsteen
    public function throwDice()
    {
        $this->dice = random_int(1,6);
        //echo $this->dice;

        //hiermee bepaal je de wakken, ijsberen en penguins
        if($this->dice == 1 || $this->dice == 3 || $this->dice == 5)
        {
            $this->iceHoles = 1;
            $this->polarBears = $this->dice - 1;
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
//        if ($this->dice== 1)
//        {
//            echo "<img src='/Dobbelstenen/dice1.png' width='100px'>";
//        }
//
//        if ($this->dice== 2)
//        {
//            echo "<img src='/Dobbelstenen/dice2.png' width='100px'>";
//        }
//        if ($this->dice== 3)
//        {
//            echo "<img src='/Dobbelstenen/dice3.png' width='100px'>";
//        }
//        if ($this->dice== 4)
//        {
//            echo "<img src='/Dobbelstenen/dice4.png' width='100px'>";
//        }
//        if ($this->dice== 5)
//        {
//            echo "<img src='/Dobbelstenen/dice5.png' width='100px'>";
//        }
//        if ($this->dice== 6)
//        {
//            echo "<img src='/Dobbelstenen/dice6.png' width='100px'>";
//        }

        switch ($this->dice) {
            case 1:
                echo "<img src='Dobbelstenen/dice1.png' width='100px'>";
                break;
            case 2:
                echo "<img src='Dobbelstenen/dice2.png' width='100px'>";
                break;
            case 3:
                echo "<img src='Dobbelstenen/dice3.png' width='100px'>";
                break;
            case 4:
                echo "<img src='Dobbelstenen/dice4.png' width='100px'>";
                break;
            case 5:
                echo "<img src='Dobbelstenen/dice5.png' width='100px'>";
                break;
            case 6:
                echo "<img src='Dobbelstenen/dice6.png' width='100px'>";
                break;
        }
    }
}