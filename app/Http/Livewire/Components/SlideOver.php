<?php

declare(strict_types=1);

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Str;

class SlideOver extends Component
{
    public ?string $component = null;

    public array $componentData = [];

    public ?string $title = null;

    protected $listeners = [
        'slideover:set' => 'setComponent',
    ];

    public function setComponent(array $data): void
    {
        $this->title = $data['title'];
        $componentName = Str::of($data['name']);

        $this->component = (string) $componentName;
        $this->componentData = $data['data'];

        if ($this->componentData['isLivewire'] = $componentName->startsWith('livewire:')) {
            $this->component = (string) $componentName->after('livewire:');
        }
    }

    public function render()
    {
        return view('livewire.components.slide-over');
    }
}
