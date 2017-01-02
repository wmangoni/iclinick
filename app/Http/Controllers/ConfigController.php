<?php

namespace App\Http\Controllers;

use App\Module;

class ConfigController extends Controller
{
    public function index()
    {
        $title = 'Configurations';
        $models = Module::all();
        $total = Module::all()->count();

        return view('modules.config.config', compact('title', 'models', 'total'));
    }
}
