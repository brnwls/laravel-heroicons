<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class BookmarkAlt extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg>
blade;
    }
}
