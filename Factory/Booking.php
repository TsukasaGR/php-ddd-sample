<?php

namespace DDDSample\Factory;

use DDDSample\ValueObject\BookingAmount;
use DDDSample\ValueObject\BookingData;

/**
 * 予約Factoryのベースとなるモデル
 */
abstract class Booking
{
    /** @var BookingData $bookingData */
    protected $bookingData;

    public function __construct(BookingData $bookingData)
    {
        $this->bookingData = $bookingData;
    }

    abstract public function getDisplayMessage(): string;
    abstract public function getAmount(): BookingAmount;
}
