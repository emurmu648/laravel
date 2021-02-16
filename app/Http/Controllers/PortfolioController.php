<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Http\Request;
use App\About;
use App\Project;
use App\Service;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('Portfolio9.index',[
            'projects' => Project::where('status',1)->get(),
            'about' => About::where('status',1)->first(),
            'services' => Service::where('status',1)->get()
        ]);
    }

}
