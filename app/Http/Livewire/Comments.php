<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments;
    public $newComment;
    public $moduleId;

    public function mount()
    {
        $this->refreshComments();
    }

    public function addComment()
    {
        $this->validate([
            'newComment' => 'required|max:255',
        ]);

        Comment::create([
            'module_id' => $this->moduleId,
            'body' => $this->newComment,
        ]);

        $this->newComment = '';

        $this->refreshComments();
    }

    public function render()
    {
        return view('livewire.comments');
    }

    public function refreshComments()
    {
        $this->comments = Comment::where('module_id', $this->moduleId)->latest()->get();
    }
}
