<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RollComment extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public \App\Models\RollComment $rollComment,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.roll-comment');
    }
}
