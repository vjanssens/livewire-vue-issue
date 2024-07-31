<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ChildComponent extends Component
{
    #[Reactive]
    public $text;

    public function render()
    {
        return <<<'HTML'
        <div>
            <h2>Hello inside ChildComponent, with text: {{ $text }}</h2>
        </div>
        HTML;
    }
}
