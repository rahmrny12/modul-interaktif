<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class ModulesComponent extends Component
{
    public $categories;
    public $selectedCategoryId;

    public function mount()
    {
        $this->categories = Category::all();
        $this->selectedCategoryId = $this->categories->first()->id;
    }

    public function render()
    {
        return view('livewire.modules-component', [
            'modules' => Category::find($this->selectedCategoryId)->modules ?? []
        ]);
    }

    public function changeCategory($categoryId)
    {
        $this->selectedCategoryId = $categoryId;
    }
}
