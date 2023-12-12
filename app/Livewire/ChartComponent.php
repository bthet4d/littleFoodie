<?php

namespace App\Livewire;

use Livewire\Component;

class ChartComponent extends Component
{
    public $rows;
    public $columns;

    //IMPORTANT - this is about reactivity; make sure to correctly seperate the logic here and in the controller

    public function render()
    {
        return view('livewire.chart-component');
    }


    public function addFoodToChart ($food) {
        //add food to specific spot at table and save progress
        //check for any milestones or goals accomplished and if so, reward points
    }

    //TODO - this should probably be in the controller
    public function createChart() {
        if (isset($rows) && !empty($rows) && isset($columns) && !empty($columns)) {
            // rows and columns are set
            //create table
                //any other conditions? Need at least one prize
        } else {
            // At least one of the variables is not set or is empty
            // Handle the case where variables are not set or empty
        }
    }
}
