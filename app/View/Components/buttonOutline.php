<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buttonOutline extends Component
{
    public $fun, $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fun, $title)
    {
        $this->fun      = $fun;     // function
        $this->title    = $title;   // title
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-outline');
    }
}
