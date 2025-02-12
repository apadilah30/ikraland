<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeadingLayout extends Component
{
    /**
     * Create a new component instance.
     */

    public $headingTitle;

    public function __construct(
        $headingTitle
    ) {
        $this->headingTitle = $headingTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heading-layout');
    }
}
