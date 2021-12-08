<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('index', ['persons' => $persons]);
    }

    public function show($id)
    {
        $person = Person::find($id);

        return view('show', ['person' => $person]);
    }
}
