<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'city' => 'required',
        ]);
        $newPeople = People::create($data);
        return view('welcome');
    }

    public function readall(){
        $people = People::all();
        return view('studentslist', ['people' => $people]);
    }

    public function edit(People $people){
        return view('edit', ['people' => $people]);
    }

    public function update(People $people, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'city' => 'required',
        ]);
        $people->update($data);
        return view('updated');
    }

    public function delete(People $people){
        $people->delete();
        return redirect(route('people.list'));
    }

    public function readpeople(Request $request)
    {
        $people = People::find($request->id);
        
        return redirect(route('people.view',['people' => $people]));
    }

    public function viewpeople(People $people)
    {
        return view('studentview', ['people' => $people]);
    }
}
