<?php

namespace DDDSample\Factory\Concrete;

use DDDSample\Factory\Booking;
use DDDSample\ValueObject\BookingAmount;

/**
 * 夜間予約モデル
 */
class NightBooking extends Booking
{
    public function getDisplayMessage(): string
    {
        return '夜間予約';
    }
    public function getAmount(): BookingAmount
    {
        // 夜間予約は時間数×人数(2倍)×5,000円の料金とする
        return new BookingAmount(
            ($this->bookingData->bookingDate->endHour->value - $this->bookingData->bookingDate->startHour->value)
            * ($this->bookingData->numberOfPeople * 2)
            * 5000
        );
    }
}
