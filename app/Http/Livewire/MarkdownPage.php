<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MarkdownPage extends Component
{
    public $highlightTheme = 'default';

    public function render()
    {
        return view('livewire.markdown-page');
    }

    public function index()
    {
        $markdown =
<<<markdown
# Title
## Subtitle

* List item
* List item 2
1. Numbered list item
2. Numbered list item 2

### Code
Php
```
$this->foo = 'bar';
```
Css
```
.title  {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 1.3rem;
}
```
Inline js code `const $x = [1, 2, 3];`

### Text formatting
**Bold** \
__Bold__ \
_Italic_ \
~~Crossed~~

### Escaped html
<script>alert()</script>
markdown;

        return view('markdown.index', compact('markdown'));
    }
}
