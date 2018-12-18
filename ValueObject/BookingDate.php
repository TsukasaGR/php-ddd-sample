<?php

namespace DDDSample\ValueObject;

class BookingDate
{
    /** @var Hour $startHour */
    public $startHour;
    /** @var Hour $endHour */
    public $endHour;

    public function __construct(Hour $startHour, Hour $endHour)
    {
        if (!$this->isValid($startHour, $endHour)) {
            echo 'echo Booking date invalid error' . PHP_EOL;
            exit;
        }
        $this->startHour = $startHour;
        $this->endHour = $endHour;
    }

    private function isValid(Hour $startHour, Hour $endHour): bool
    {
        // 必ず終了日のほうが遅い時間とする
        return $startHour->value < $endHour->value;
    }
}
