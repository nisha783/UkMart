<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class SearchResult extends Component
{
    public $keyword;
    public $searchResult = [];

    public function updatedKeyword()
    {
        $this->searchResult = Product::where('name', 'like', '%' . $this->keyword . '%')
            ->orWhere('description', 'like', '%' . $this->keyword . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search-result');
    }
}
