<?php

declare(strict_types=1);

/**
 * File: RendererFactory.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Factories;

use App\Api\MultiplicationArrayRendererInterface;
use App\Models\Attributes\SerializationType;
use App\Models\Renderers\JsonSerialization;
use App\Models\Renderers\PhpSerialization;

/**
 * interface RendererFactory
 * @package App\Factories
 */
class RendererFactory
{
    /**
     * @param SerializationType $type
     * @return MultiplicationArrayRendererInterface
     */
    public static function create(SerializationType $type): MultiplicationArrayRendererInterface {
        return match ($type) {
            SerializationType::JSON => new JsonSerialization(),
            SerializationType::PHP => new PhpSerialization(),
        };
    }
}
