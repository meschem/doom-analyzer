<?php

namespace App\Models;

class Chart
{
    /** @var string */
    public $labels;

    /** @var string */
    public $data;

    /** @var string */
    public $backgroundColors;

    public function __construct()
    {
        $this->labels = [];
        $this->data = [];
        $this->backgroundColors = [];
    }

    /**
     * Sets the type of graph
     * 
     * @param string $type 'bar'|'pie'|'doughnut'|'scatter'
     * @return Chart
     */
    public function setType(string $type)
    {
        $validTypes = [
            'bar',
            'pie',
            'doughtnut',
            'scatter'
        ];

        if (!in_array($type, $validTypes))
            throw new \Exception ('Invalid type specified: ' . $type . 'Must be bar, pie, doughtnut, or scatter');

        $this->type = $type;

        return $this;
    }

    /**
     * Adds a datapoint. The data type will depend on the 
     * graph type
     * 
     * @param mixed $value 
     * @return Chart
     */
    public function addDataPoint($value)
    {
        $this->data[] = $value;

        return $this;
    }

    /**
     * Adds a background color
     * 
     * @param string $color
     * @return Chart
     */
    public function addBackgroundColor(string $color)
    {
        $this->backgroundColors[] = $color;

        return $this;
    }

    /**
     * Adds a datapoint. The data type will depend on the 
     * graph type
     * 
     * @param string $name
     * @return Chart
     */
    public function addLabel(string $name)
    {
        $this->labels[] = $name;

        return $this;
    }
}
