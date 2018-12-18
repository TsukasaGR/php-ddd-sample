<?php

namespace DDDSample\ValueObject;

class Hour
{
    /** @var int */
    public $value;

    public function __construct(int $hour)
    {
        if (!$this->isValid($hour)) {
            echo 'echo hour invalid error' . PHP_EOL;
            exit;
        }
        $this->value = $hour;
    }

    private function isValid(int $hour): bool
    {
        // 0 - 24時以外はNGとする
        return $hour > 0 || $hour < 24;
    }
}
