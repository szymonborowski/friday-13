<?php

declare(strict_types=1);

/**
 * File: MultiplicationArrayManagerFactory.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Factories;

use App\Api\MultiplicationArrayManagerInterface;
use App\Models\MultiplicationArrayManager;

/**
 * interface MultiplicationArrayManagerFactory
 * @package App\Factories
 */
class MultiplicationArrayManagerFactory
{
    /**
     * @return MultiplicationArrayManagerInterface
     */
    public static function create(): MultiplicationArrayManagerInterface
    {
        return new MultiplicationArrayManager;
    }
}
