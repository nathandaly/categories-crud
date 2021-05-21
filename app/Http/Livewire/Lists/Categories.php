<?php

declare(strict_types=1);

namespace App\Http\Livewire\Lists;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Categories extends Component
{
    public Collection $categories;

    protected $listeners = [
        'category:updated' => '$refresh',
    ];

    public function mount(): void
    {
        $this->categories = Category::all();
    }

    public function delete(int $categoryId): void
    {
        $category = $this->categories->where('id', $categoryId)->first();

        if ($category->delete()) {
            $this->emitSelf('category:updated');
        }
    }

    public function render(): View
    {
        return view('livewire.lists.categories');
    }
}
