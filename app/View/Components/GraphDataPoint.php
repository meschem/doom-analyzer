<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class GraphDataPoint extends Component
{
    /** @var string */
    public $xValue;

    /** @var string */
    public $yValue;

    /** @var string */
    public $name;

    /** @var string */
    public $imagePath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $xValue, string $yValue, string $name)
    {
        $this->xValue = $xValue;
        $this->yValue = $yValue;
        $this->name = $name;

        $fileName = Str::snake($this->name);

        $this->imagePath = "images/demons/$fileName.png";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.graph-data-point');
    }
}
