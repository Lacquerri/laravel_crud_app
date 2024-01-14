<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
class apiController extends Controller
{
    public function create(Request $request){
        $students = new People();
        $students->name = $request->input('name');
        $students->surname = $request->input('surname');
        $students->phone = $request->input('phone');
        $students->street = $request->input('street');
        $students->city = $request->input('city');
        $students->save();
        return response()->json($students);
    }

    public function updatebyid(Request $request, $id){
        $students = People::find($id);
        $students->name = $request->input('name');
        $students->surname = $request->input('surname');
        $students->phone = $request->input('phone');
        $students->street = $request->input('street');
        $students->city = $request->input('city');
        $students->save();
        return response()->json($students);
    }

    public function deletebyid($id){
        $students = People::find($id);
        $students->delete();
        return response()->json($students);
    }

    public function showall(){
        $students = People::all();
        return response()->json($students);
    }

    public function showbyid($id){
        $students = People::find($id);
        return response()->json($students);
    }
}
