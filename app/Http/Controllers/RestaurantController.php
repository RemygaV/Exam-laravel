<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function index()
    {
        return Restaurant::all();
    }

    public function store(Request $request)
    {
           $request->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
        ]);

        $rn1 = new Restaurant();
        $rn1->name = $request['name'];
        $rn1->code = $request['code'];
        $rn1->address = $request['address'];

        return ($rn1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }

    public function show($id)
    {
        return Restaurant::find($id);
    }

    public function destroy($id)
    {
        return (Restaurant::destroy($id) == 1)
        ?  response()->json(['success' => 'success'], 204)
        :  response()->json(['error' => 'delete not successful'], 500);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required'
           
        ]);

        $rn1 = Restaurant::find($id);
        $rn1->name = $request['name'];
        $rn1->code = $request['code'];
        $rn1->address = $request['address'];
     
        return ($rn1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }


}
