<?php

declare(strict_types=1);

/**
 * File: MultiplicationArrayManager.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models;

use App\Api\MultiplicationArrayManagerInterface;
use App\Factories\CalculationServiceFactory;
use App\Factories\MultiplicationArrayFactory;
use App\Factories\RendererServiceFactory;
use App\Models\Attributes\SerializationType;
use App\Models\Attributes\Size;

/**
 * class MultiplicationArrayManager
 * @package App\Models
 */
class MultiplicationArrayManager implements MultiplicationArrayManagerInterface
{
    /**
     * @inheritdoc
     */
    public function getBySizeAndType(Size $size, SerializationType $type): MultiplicationArray
    {
        $multiplicationArray = MultiplicationArrayFactory::create()->getBySizeAndType($size, $type);

        if (! $multiplicationArray) {
            $multiplicationArray = $this->create($size, $type);
        }

        return $multiplicationArray;
    }

    /**
     * @param Size $size
     * @param SerializationType $type
     * @return MultiplicationArray
     */
    private function create(Size $size, SerializationType $type)
    {
        $data = CalculationServiceFactory::create()->calculateArray($size);
        $renderedData = RendererServiceFactory::create()->render($type, $data);

        $multiplicationArray = MultiplicationArrayFactory::create();
        $multiplicationArray->setSize($size)
            ->setSerializationType($type)
            ->setSerializeData($renderedData)
            ->save();

        return $multiplicationArray;
    }
}
