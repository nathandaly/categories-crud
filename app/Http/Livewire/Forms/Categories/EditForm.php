<?php

declare(strict_types=1);

namespace App\Http\Livewire\Forms\Categories;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class EditForm extends Component
{
    public Category $category;

    public array $data = [];

    protected $rules = [
        'category.name' => 'required|string|min:3',
    ];

    public function mount(): void
    {
        $this->category = Category::find($this->data['id']);
    }

    public function delete(): void
    {
        if ($this->category->delete()) {
            $this->emitSelf('notify->saved');
            $this->emit('category:updated');
        }
    }

    public function save(): void
    {
        $this->validate();

        if ($this->category->save()) {
            $this->emitSelf('notify->saved');
            $this->emit('category:updated');
        }
    }

    public function render(): View
    {
        return view('livewire.forms.categories.edit-form');
    }
}
