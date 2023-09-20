<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
  function index() {
    $data['title'] = 'Faris Faikar';
    $data['description'] = 'I am Faris Faikar, a Software Engineer based in Indonesia. Pave the ways for your projects and contact me if you have any projects in need of a competent, eficient and reliable programmer!';

    return view('landing', compact('data'));
  }
}
