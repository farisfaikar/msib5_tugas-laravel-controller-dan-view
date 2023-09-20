<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $data['name'] = 'Faris Faikar Razannafi';
        $data['job'] = 'Software Engineer';
        $data['hobby'] = 'Touch Typing';
        $data['favorite_food'] = 'Burger';
        $data['email'] = 'farisfaikar.r@gmail.com';
        $data['phone'] = '+62 896-464-586-49';
        
        return view('about', compact('data'));
    }
}
