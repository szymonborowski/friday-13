<?php

declare(strict_types=1);

/**
 * File: Size.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models\Attributes;

use Assert\Assertion;

/**
 * class Size
 * @package App\Models\Attributes
 */
class Size
{
    public const LIMIT = 1000;

    private function __construct(private readonly int $value)
    {
        Assertion::between(
            $value,
            0,
            self::LIMIT,
            __('Size of a table must be grater than 0 and less than :limit', [self::LIMIT])
        );
    }

    /**
     * @param int $value
     * @return self
     */
    public static function create(int $value): self
    {
        return new self($value);
    }

    /**
     * @param Size $otherName
     * @return bool
     */
    public function equals(self $otherName): bool
    {
        return (string)$this->value === ((string)$otherName);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->value;
    }
}
