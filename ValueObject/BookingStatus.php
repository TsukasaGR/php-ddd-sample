<?php

namespace DDDSample\ValueObject;

class BookingStatus
{
    const STATUS_LIST = [0, 1];
    const STATUS_PRE = 0;
    const STATUS_BOOKING = 1;

    /** @var int */
    public $value;

    public function __construct(int $status)
    {
        if (!$this->isValid($status)) {
            echo 'booking status invalid error' . PHP_EOL;
            exit;
        }
        $this->value = $status;
    }

    private function isValid(int $status): bool
    {
        // self::STATUS_LISTにない値はエラーとする
        return in_array($status, self::STATUS_LIST);
    }
}
