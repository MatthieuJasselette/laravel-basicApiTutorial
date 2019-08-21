<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
     public function store(Request $request): PersonResource
     {
         $request->validate([
             'first_name'   => 'required',
             'last_name'    => 'required',
             'phone'        => 'required',
             'email'        => 'required',
             'city'         => 'required',
         ]);

         $person = Person::create($request->all());

        return new PersonResource($person);
     }

     public function update(Person $person, Request $request): PersonResource
     {
        $person->update($request->all());

        return new PersonResource($person);
     }

     public function destroy(Person $person)
     {
         $person->delete();

         return response()->json();
     }
}