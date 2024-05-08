<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Modules extends Component
{
    public $modules;
    public $categories;
    public $selectedCategoryId;

    public function mount()
    {
        $this->categories = Category::all();
        $this->selectedCategoryId = $this->categories->first()->id;
        $this->refreshModules();
    }

    public function render()
    {
        return view('livewire.modules');
    }

    public function changeCategory($categoryId)
    {
        $this->selectedCategoryId = $categoryId;
        $this->refreshModules();
    }

    public function refreshModules()
    {
        $this->modules = Category::find($this->selectedCategoryId)->modules ?? [];
    }
}
