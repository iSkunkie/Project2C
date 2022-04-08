<?php

namespace Proejct5;

class Game
{
    private int $wrong = 0;
    private int $correct = 0;
    private int $resultIceHoles;
    private int $resultPolarBears;
    private int $resultPenguins;
    private TurnList $turnList;
    private DiceList $diceList;

    public function __construct(int $amount)
    {
        $this->diceList = new DiceList();

        for($i = 0; $i < $amount; $i++)
        {
            $dice = new Dice();
            $dice->throwDice();
            $this->diceList->addDice($dice);
        }
    }

    // toon de dobbelstenen op het scherm
    public function drawDices()
    {
        foreach($this->diceList->getDices() as $dice)
        {
            echo $dice->draw();
        }
    }

    public function result()
    {
        foreach($this->diceList->getDices() as $dice)
        {
            $this->resultIceHoles += $dice->getIceHoles();
            $this->resultPolarBears += $dice->getPolarBears();
            $this->resultPenguins += $dice->getPenguins();
        }
    }

    public function getTurnList(): TurnList
    {
        return $this->turnList;
    }

}