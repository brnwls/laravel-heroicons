<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class ArrowRight extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg>
blade;
    }
}
