<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MarkdownPage extends Component
{
    public $theme = 'default';

    public function render()
    {
        return view('livewire.markdown-page');
    }

}
