<?php

declare(strict_types=1);

namespace App\Http\Livewire\Forms\Items;

use App\Models\Category;
use App\Models\Item;
use Livewire\Component;

class EditForm extends Component
{
    public ?Category $category;

    public ?int $categoryId = null;

    public Item $item;

    public array $data = [];

    protected $rules = [
        'item.name' => 'required|string|min:3',
        'category' => 'required',
    ];

    public function mount()
    {
        $this->item = Item::find($this->data['id']);
        $this->category = $this->item->categories()->first();
        $this->categoryId = $this->category?->id;
    }

    public function delete()
    {
        $this->item->categories()->delete();

        if ($this->item->delete()) {
            $this->emitSelf('notify->saved');
            $this->emit('item:updated');
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->category->id !== $this->categoryId) {
            $this->item->categories()->sync([$this->categoryId]);
        }

        if ($this->item->save()) {
            $this->emitSelf('notify->saved');
            $this->emit('item:updated');
        }
    }

    public function render()
    {
        return view('livewire.forms.items.edit-form');
    }
}
