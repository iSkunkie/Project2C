<?php

namespace Proejct5;

class HintList
{
    private array $hints = [];

    public function addHint(Hint $hint)
    {
        $this->hints[] = $hint;
    }

    public function getHints()
    {
        return $this->hints;
    }

    public function getRandomHint()
    {

    }
}