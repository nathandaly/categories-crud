<?php

declare(strict_types=1);

namespace App\Http\Livewire\Lists;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Collection;

class Items extends Component
{
    public ?Category $category = null;

    public Collection $items;

    protected $listeners = [
        'item:updated' => 'refresh',
    ];

    public function mount()
    {
        $this->refresh();
    }

    public function delete(int $itemId)
    {
        /** @var Item */
        $item = $this->items->where('id', $itemId)->first();
        $item->categories()->delete();

        if ($item->delete()) {
            $this->emitSelf('item:updated');
        }
    }

    public function refresh()
    {
        if (!$this->category) {
            $this->items = Item::all();
        } else {
            $this->items = $this->category
                ->items()
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.lists.items');
    }
}
