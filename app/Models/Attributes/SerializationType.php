<?php

declare(strict_types=1);

/**
 * File: SerializationType.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models\Attributes;

/**
 * enum SerializationType
 * @package App\Models\Attributes
 */
enum SerializationType: string
{
    case JSON = 'json';
    case PHP = 'php';
}
