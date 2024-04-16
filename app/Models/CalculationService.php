<?php

declare(strict_types=1);

/**
 * File: CalculationService.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models;

use App\Api\CalculationServiceInterface;
use App\Models\Attributes\Size;
use Generator;

/**
 * class CalculationService
 * @package App\Models
 */
class CalculationService implements CalculationServiceInterface
{
    /**
     * @inheritdoc
     */
    public static function calculateArray(Size $size): array
    {
        $data = [];

        for($i = 1; $i <= (string)$size; $i++) {
            $data["$i"] = self::calculateRow($i);
        }

        return $data;
    }

    /**
     * @param int $rowNumber
     * @return Generator
     */
    private static function calculateRow(int $rowNumber)
    {
        $row = [];

        for($i = 1; $i <= self::ROW_SIZE; $i++) {
            $row["$i"] = $i * $rowNumber;
        }

        return $row;
    }
}
