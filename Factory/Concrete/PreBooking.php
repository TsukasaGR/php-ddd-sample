<?php

namespace DDDSample\Factory\Concrete;

use DDDSample\Factory\Booking;
use DDDSample\ValueObject\BookingAmount;

/**
 * 事前予約モデル
 */
class PreBooking extends Booking
{
    public function getDisplayMessage(): string
    {
        return '事前予約';
    }
    public function getAmount(): BookingAmount
    {
        // 事前予約は時間数×人数×3,000円の料金とする
        return new BookingAmount(
            ($this->bookingData->bookingDate->endHour->value - $this->bookingData->bookingDate->startHour->value)
            * $this->bookingData->numberOfPeople
            * 3000
        );
    }
}
