<?php

declare(strict_types=1);

/**
 * File: MultiplicationArray.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Models;

use App\Api\Data\MultiplicationArrayInterface;
use App\Models\Attributes\SerializationType;
use App\Models\Attributes\Size;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * class MultiplicationArray
 * @package App\Models
 */
class MultiplicationArray extends Model implements MultiplicationArrayInterface
{
    protected $casts = [
        'serialization_type' => SerializationType::class,
    ];

    /**
     * @return Attribute
     */
    protected function size(): Attribute
    {
        return  Attribute::make(
            get: fn (string $value) => Size::create($value),
            set: fn (Size $value) => (string)$value,
        );
    }

    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array<int, string>
     */
    public function uniqueIds(): array
    {
        return ['size'];
    }

    /**
     * @inheritdoc
     */
    public static function getBySizeAndType(Size $size, SerializationType $type): ?MultiplicationArrayInterface
    {
        return self::where(['size' => $size, 'serialization_type' => $type])->first();
    }

    /**
     * @inheritdoc
     */
    public function getSize(): Size
    {
        return $this->size;
    }

    /**
     * @inheritdoc
     */
    public function setSize(Size $size): MultiplicationArrayInterface
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSerializationType(): SerializationType
    {
        return $this->serialization_type;
    }

    /**
     * @inheritdoc
     */
    public function setSerializationType(SerializationType $serializationType): MultiplicationArrayInterface
    {
        $this->serialization_type = $serializationType;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSerializeData(): string
    {
        return $this->serialize_data;
    }

    /**
     * @inheritdoc
     */
    public function setSerializeData(string $serializeData): MultiplicationArrayInterface
    {
        $this->serialize_data = $serializeData;

        return $this;
    }
}
