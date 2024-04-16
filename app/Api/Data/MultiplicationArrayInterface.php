<?php

declare(strict_types=1);

/**
 * File: MultiplicationArrayInterface.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Api\Data;

use App\Models\Attributes\SerializationType;
use App\Models\Attributes\Size;

/**
 * interface MultiplicationArrayInterface
 * @package App\Api\Data
 */
interface MultiplicationArrayInterface
{
    /**
     * @return Size
     */
    public function getSize(): Size;

    /**
     * @param Size $size
     * @return MultiplicationArrayInterface
     */
    public function setSize(Size $size): MultiplicationArrayInterface;

    /**
     * @return SerializationType
     */
    public function getSerializationType(): SerializationType;

    /**
     * @param SerializationType $serializationType
     * @return MultiplicationArrayInterface
     */
    public function setSerializationType(SerializationType $serializationType): MultiplicationArrayInterface;

    /**
     * @return string
     */
    public function getSerializeData(): string;

    /**
     * @param string $serializedData
     * @return MultiplicationArrayInterface
     */
    public function setSerializeData(string $serializedData): MultiplicationArrayInterface;

    /**
     * @param Size $size
     * @param SerializationType $type
     * @return MultiplicationArrayInterface|null
     */
    public static function getBySizeAndType(Size $size, SerializationType $type): ?MultiplicationArrayInterface;
}
