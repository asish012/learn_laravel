<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function show(Person $person): Person
    {
//        dd($person);
        return $person;
    }
}
