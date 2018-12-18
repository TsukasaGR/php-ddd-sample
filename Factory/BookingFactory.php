<?php

namespace DDDSample\Factory;

use DDDSample\Factory\Concrete\DatetimeBooking;
use DDDSample\Factory\Concrete\NightBooking;
use DDDSample\Factory\Concrete\PreBooking;
use DDDSample\ValueObject\BookingData;
use DDDSample\ValueObject\BookingStatus;

/**
 * 予約管理Factory
 */
class BookingFactory
{
    public static function factory(BookingData $bookingData)
    {
        if (self::isPreBooking($bookingData)) {
            return new PreBooking($bookingData);
        }
        else if (self::isDatetimeBooking($bookingData)) {
            return new DatetimeBooking($bookingData);
        }
        else if (self::isNightBooking($bookingData)) {
            return new NightBooking($bookingData);
        }
        else {
            echo 'booking factory invalid error';
            exit;
        }

    }

    private static function isPreBooking(BookingData $bookingData)
    {
        return $bookingData->status === BookingStatus::STATUS_PRE;
    }

    private static function isDatetimeBooking(BookingData $bookingData)
    {
        return $bookingData->bookingDate->startHour->value < 18;
    }

    private static function isNightBooking(BookingData $bookingData)
    {
        return $bookingData->bookingDate->startHour->value >= 18;
    }

}
