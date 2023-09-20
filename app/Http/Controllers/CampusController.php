<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusController extends Controller
{
  function index() {
    $data['campus_name'] = 'State University of Semarang';
    $data['major'] = 'Computer Science';
    $data['study_program'] = 'Informatics Engineering';
    $data['organization'] = 'RIPTEK';
    
    return view('campus', compact('data'));
  }
}
