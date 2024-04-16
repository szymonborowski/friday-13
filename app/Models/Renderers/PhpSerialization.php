<?php

declare(strict_types=1);

/**
 * File: PhpSerialization.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models\Renderers;

use App\Api\MultiplicationArrayRendererInterface;

/**
 * class PhpSerialization
 * @package App\Models\Renderers
 */
class PhpSerialization implements MultiplicationArrayRendererInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function render(array $data): string
    {
        return serialize($data);
    }
}
