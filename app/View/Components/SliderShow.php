<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Slider;

class SliderShow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    
    public function render(): View|Closure|string
    {
        $arg=[
            ['status','=', 1],
            ['position','=','mainslide']
        ];
        $list_slider =Slider::where($arg)->get();
        return view('components.slider-show', compact('list_slider'));

    }
}
