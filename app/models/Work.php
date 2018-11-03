<?php

namespace App\Models;

// A class that represents a ToDo work.
use App\App;

class Work
{
    public $status;
    public $name;
    public $startDate;
    public $endDate;


    public function status()
    {
       return App::get('config')['status'][$this->status];
    }
}