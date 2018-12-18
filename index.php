<?php

require 'autoload.php';

use DDDSample\Factory\BookingFactory;
use DDDSample\ValueObject\BookingData;
use DDDSample\ValueObject\BookingDate;
use DDDSample\ValueObject\BookingStatus;
use DDDSample\ValueObject\Hour;
use DDDSample\ValueObject\NumberOfPeople;

/** @var BookingData $preBookingData */
$preBookingData = new BookingData(
    new NumberOfPeople(1),
    new BookingDate(new Hour(10), new Hour(11)),
    new BookingStatus(0)
);
/** @var BookingData $preBookingData */
$datetimeBookingData = new BookingData(
    new NumberOfPeople(1),
    new BookingDate(new Hour(10), new Hour(11)),
    new BookingStatus(1)
);
/** @var BookingData $preBookingData */
$nightBookingData = new BookingData(
    new NumberOfPeople(1),
    new BookingDate(new Hour(18), new Hour(19)),
    new BookingStatus(1)
);


$preBooking = BookingFactory::factory($preBookingData);
echo "PreBooking class's message = " . $preBooking->getDisplayMessage() . PHP_EOL;
echo "PreBooking class's amount = " . $preBooking->getAmount()->value . PHP_EOL;

$datetimeBooking = BookingFactory::factory($datetimeBookingData);
echo "DatetimeBooking class's message = " . $datetimeBooking->getDisplayMessage() . PHP_EOL;
echo "DatetimeBooking class's amount = " . $datetimeBooking->getAmount()->value . PHP_EOL;

$nightBooking = BookingFactory::factory($nightBookingData);
echo "NightBooking class's message = " . $nightBooking->getDisplayMessage() . PHP_EOL;
echo "NightBooking class's amount = " . $nightBooking->getAmount()->value . PHP_EOL;

