<?php

declare(strict_types=1);

/**
 * File: MultiplicationArrayFactory.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Factories;

use App\Api\Data\MultiplicationArrayInterface;
use App\Models\MultiplicationArray;

/**
 * interface MultiplicationArrayFactory
 * @package App\Factories
 */
class MultiplicationArrayFactory
{

    /**
     * @return MultiplicationArrayInterface
     */
    public static function create(): MultiplicationArrayInterface
    {
        return new MultiplicationArray;
    }
}
