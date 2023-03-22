<?php

namespace App\View\Components;

use Illuminate\View\Component;

class homeHeroSection extends Component
{
    public $heroSection;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heroSection)
    {
        $this->heroSection = $heroSection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-hero-section');
    }
}
