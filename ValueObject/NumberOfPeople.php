<?php

namespace DDDSample\ValueObject;

class NumberOfPeople
{
    /** @var int */
    public $value;

    public function __construct(int $numberOfPeople)
    {
        if (!$this->isValid($numberOfPeople)) {
            echo 'echo number of people invalid error' . PHP_EOL;
            exit;
        }
        $this->value = $numberOfPeople;
    }

    private function isValid(int $numberOfPeople): bool
    {
        // 9人までしか予約出来ないものとする
        return $numberOfPeople > 0 || $numberOfPeople < 10;
    }
}
