<?php

declare(strict_types=1);

/**
 * File: Json.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Livewire;

use App\Factories\MultiplicationArrayManagerFactory;
use App\Models\Attributes\Size;
use App\Models\Attributes\SerializationType;
use Livewire\Component;

/**
 * interface Json
 * @package App\Livewire
 */
class Json extends Component
{
    public int $size = 10;
    public string $json = '';

    protected $rules = [
        'size' => 'required|integer|gt:0|lte:'.Size::LIMIT,
    ];

    protected $messages = [
        'size.required' => 'The :attribute field is required',
        'size.integer' => 'The :attribute field must be an integer.',
        'size.gt' => 'The :attribute field must be greater than 0.',
        'size.lte' => 'The :attribute field must be less than '.Size::LIMIT,
    ];

    public function render()
    {
        return view('livewire.json')
            ->title('generator');
    }

    public function generateJson(): void
    {
        $this->validate();

        $multiplicationArray = MultiplicationArrayManagerFactory::create()->getBySizeAndType(Size::create($this->size), SerializationType::JSON);
        $this->json = $multiplicationArray->getSerializeData();
    }
}
