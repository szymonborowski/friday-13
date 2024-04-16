<?php

declare(strict_types=1);

/**
 * File: JsonSerialization.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models\Renderers;

use App\Api\MultiplicationArrayRendererInterface;

/**
 * class JsonSerialization
 * @package App\Models\Renderers
 */
class JsonSerialization implements MultiplicationArrayRendererInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function render(array $data): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
