<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number_of_patients = \App\Patient::all()->count();
        $number_of_segments = \App\Segment::all()->count();
        $number_of_medicines = \App\Medicine::all()->count();
        $number_of_professions = \App\Profession::all()->count();
        $number_of_services = \App\Service::all()->count();
        $number_of_convenios = \App\Convenio::all()->count();
        $convenios = \App\Convenio::All();
        $segments = \App\Segment::All();
        $services = \App\Service::All();
        $counts = [
            'patients' => ['icon' => 'address-book-o', 'class' => 'green', 'num' => $number_of_patients],
            'segments' => ['icon' => 'book', 'class' => 'primary', 'num' => $number_of_segments],
            'medicines' => ['icon' => 'medkit', 'class' => 'success', 'num' => $number_of_medicines],
            'professions' => ['icon' => 'briefcase', 'class' => 'info', 'num' => $number_of_professions],
            'services' => ['icon' => 'institution', 'class' => 'warning', 'num' => $number_of_services],
            'convenios' => ['icon' => 'id-card', 'class' => 'yellow', 'num' => $number_of_convenios]
        ];
        return view('home', compact('counts', 'convenios', 'segments', 'services'));
    }
}
