<?php

declare(strict_types=1);

/**
 * File: CalculationServiceFactory.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Factories;

use App\Api\CalculationServiceInterface;
use App\Models\CalculationService;

/**
 * interface CalculationServiceFactory
 * @package App\Factories
 */
class CalculationServiceFactory
{

    /**
     * @return CalculationServiceInterface
     */
    public static function create(): CalculationServiceInterface
    {
        return new CalculationService;
    }
}
