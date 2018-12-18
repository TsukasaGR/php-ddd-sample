<?php

namespace DDDSample\ValueObject;

class BookingAmount
{
    /** @var int */
    public $value;

    public function __construct(int $amount)
    {
        if (!$this->isValid($amount)) {
            echo 'echo amount invalid error' . PHP_EOL;
            exit;
        }
        $this->value = $amount;
    }

    private function isValid(int $amount): bool
    {
        // 0円以下はNGとする
        return $amount > 0;
    }
}
