<?php

declare(strict_types=1);

/**
 * File: RendererServiceFactory.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Factories;

use App\Api\RendererServiceInterface;
use App\Models\RendererService;

/**
 * interface RendererServiceFactory
 * @package App\Factories
 */
class RendererServiceFactory
{

    /**
     * @return RendererServiceInterface
     */
    public static function create(): RendererServiceInterface
    {
        return new RendererService;
    }
}
