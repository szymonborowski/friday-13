<?php

declare(strict_types=1);

/**
 * File: Faq.php
 * @author Szymon Borowski <szymon.borowski@gmail.com>
 * @copyright 2024 Szymon Borowski <szymon.borowski@gmail.com>
 */

namespace App\Livewire;

use Livewire\Component;

/**
 * interface Faq
 * @package App\Livewire
 */
class Faq extends Component
{
    public function render()
    {
        return view('livewire.faq')
            ->title('FAQ');
    }
}
