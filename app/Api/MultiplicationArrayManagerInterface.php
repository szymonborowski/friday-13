<?php

declare(strict_types=1);

/**
 * File: MultiplicationArrayManagerInterface.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Api;

use App\Models\Attributes\SerializationType;
use App\Models\Attributes\Size;
use App\Models\MultiplicationArray;

/**
 * interface MultiplicationArrayManagerInterface
 * @package App\Api
 */
interface MultiplicationArrayManagerInterface
{
    /**
     * @param Size $size
     * @param SerializationType $type
     * @return MultiplicationArray
     */
    public function getBySizeAndType(Size $size, SerializationType $type): MultiplicationArray;
}
