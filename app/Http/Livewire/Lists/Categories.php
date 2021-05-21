<?php

namespace App\Http\Livewire\Lists;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Collection;

class Categories extends Component
{
    public Collection $categories;

    protected $listeners = [
        'category:updated' => '$refresh',
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function delete(int $categoryId)
    {
        $category = $this->categories->where('id', $categoryId)->first();

        if ($category->delete()) {
            $this->emitSelf('category:updated');
        }
    }

    public function render()
    {
        return view('livewire.lists.categories');
    }
}
