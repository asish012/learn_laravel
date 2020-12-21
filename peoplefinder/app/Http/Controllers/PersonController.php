<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

class PersonController extends Controller
{
    public function show(Person $person): PersonResource
    {
        // dd($person);
        return new PersonResource($person);
    }

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }
}
