<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $input = '';
    public $text = '';

    public function render()
    {
        return <<<'HTML'
        <div>
            <h1>Hello from ParentComponent</h1>

            <div>
                <select wire:model.live="text" class="border" wire:key="selector">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <!-- Verwijder de div de div en het werkt -->
            <div>
                <livewire:child-component :text="$text" wire:key="child-1" />
            </div>
        </div>
        HTML;
    }

    public function submit()
    {
        $this->text = $this->input;
        $this->input = '';
    }
}
