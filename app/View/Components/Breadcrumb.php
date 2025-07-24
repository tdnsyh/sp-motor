<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Request;

class Breadcrumb extends Component
{
    public $segments;

    public function __construct()
    {
        $this->segments = Request::segments();
    }

    public function render()
    {
        return view('components.breadcrumb');
    }
}
