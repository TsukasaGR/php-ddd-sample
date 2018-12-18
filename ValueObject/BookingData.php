<?php

namespace DDDSample\ValueObject;

class BookingData
{
    /** @var int */
    public $numberOfPeople;
    /** @var BookingDate */
    public $bookingDate;
    /** @var BookingStatus */
    public $status;

    public function __construct(NumberOfPeople $numberOfPeople, BookingDate $bookingDate, BookingStatus $status)
    {
        $this->numberOfPeople = $numberOfPeople->value;
        $this->bookingDate = $bookingDate;
        $this->status = $status->value;
    }
}
