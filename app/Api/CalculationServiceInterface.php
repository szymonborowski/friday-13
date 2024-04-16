<?php

declare(strict_types=1);

/**
 * File: CalculationServiceInterface.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Api;

use App\Models\Attributes\Size;

/**
 * interface CalculationServiceInterface
 * @package App\Api
 */
interface CalculationServiceInterface
{
    const ROW_SIZE = 10;

    /**
     * @param Size $size
     * @return array
     */
    public static function calculateArray(Size $size): array;
}
