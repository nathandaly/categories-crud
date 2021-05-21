<?php

declare(strict_types=1);

namespace App\Http\Livewire\Forms\Categories;

use App\Models\Category;
use Livewire\Component;

class EditForm extends Component
{
    public Category $category;

    public array $data = [];

    protected $rules = [
        'category.name' => 'required|string|min:3',
    ];

    public function mount()
    {
        $this->category = Category::find($this->data['id']);
    }

    public function delete()
    {
        if ($this->category->delete()) {
            $this->emitSelf('notify->saved');
            $this->emit('category:updated');
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->category->save()) {
            $this->emitSelf('notify->saved');
            $this->emit('category:updated');
        }
    }

    public function render()
    {
        return view('livewire.forms.categories.edit-form');
    }
}
