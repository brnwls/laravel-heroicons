<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class ChevronDoubleDown extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
</svg>
blade;
    }
}
