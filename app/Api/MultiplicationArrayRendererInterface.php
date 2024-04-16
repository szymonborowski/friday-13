<?php

declare(strict_types=1);

/**
 * File: MultiplicationArrayRendererInterface.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Api;

use App\Models\MultiplicationArray;

/**
 * interface MultiplicationArrayRendererInterface
 * @package App\Api
 */
interface MultiplicationArrayRendererInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function render(array $data): string;
}
