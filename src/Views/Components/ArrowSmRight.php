<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class ArrowSmRight extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
</svg>
blade;
    }
}
