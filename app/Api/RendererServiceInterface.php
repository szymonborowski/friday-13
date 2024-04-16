<?php

declare(strict_types=1);

/**
 * File: RendererServiceInterface.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Api;

use App\Models\Attributes\SerializationType;

/**
 * interface RendererServiceInterface
 * @package App\Api
 */
interface RendererServiceInterface
{
    const ROW_SIZE = 10;

    /**
     * @param SerializationType $serializationType
     * @param array $data
     * @return string
     */
    public static function render(SerializationType $serializationType, array $data): string;
}
