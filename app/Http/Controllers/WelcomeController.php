<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * 
     * 
     * 
     * @return mixed
     */
    public function index()
    {
        $firstName = 'James';
        $lastName  = 'White';
        
        $otherPeople = [
            'Alex Jackie',
            'Martin Lock',
            'Edward Ford',
        ];
        return view('pages.welcome')->with([
          'firstName'   => $firstName,
          'lastName'    => $lastName,
          'otherPeople' => $otherPeople,
        ]);
        
        
    }
    
}
