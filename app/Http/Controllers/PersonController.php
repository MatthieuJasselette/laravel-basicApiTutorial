<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonCollection;

class PersonController extends Controller
{
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    public function index(): PersonCollection
    {
        return new PersonCollection(Person::paginate()) ;
    }
}
