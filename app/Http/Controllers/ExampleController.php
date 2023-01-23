<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ExampleController extends Controller
{
    public function homepage()
    {

        //maybe we loaded data from DB

        $ourName = 'Shamonti';
        $animals = ['cat', 'dog', 'hamster'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);
    }

    public function aboutPage()
    {
        return view('single-post');
    }
}
