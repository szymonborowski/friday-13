<?php

declare(strict_types=1);

/**
 * File: RendererService.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models;

use App\Api\RendererServiceInterface;
use App\Factories\RendererFactory;
use App\Models\Attributes\SerializationType;

/**
 * class RendererService
 * @package App\Models
 */
class RendererService implements RendererServiceInterface
{
    /**
     * @inheritdoc
     */
    public static function render(SerializationType $serializationType, array $data): string
    {
        $renderer = RendererFactory::create($serializationType);

        return $renderer->render($data);
    }
}
