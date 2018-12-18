<?php

namespace DDDSample\Factory\Concrete;

use DDDSample\Factory\Booking;
use DDDSample\ValueObject\BookingAmount;

/**
 * 日中予約モデル
 */
class DatetimeBooking extends Booking
{
    public function getDisplayMessage(): string
    {
        return '日中予約';
    }
    public function getAmount(): BookingAmount
    {
        // 日中予約は時間数×人数×4,000円の料金とする
        return new BookingAmount(
            ($this->bookingData->bookingDate->endHour->value - $this->bookingData->bookingDate->startHour->value)
            * $this->bookingData->numberOfPeople
            * 4000
        );
    }
}
