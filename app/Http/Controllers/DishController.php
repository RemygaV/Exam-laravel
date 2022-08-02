<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{

    public function index()
    {
        return Dish::all();
    }

    public function show($id)
    {
        return Dish::find($id);
    }
    public function store(Request $request)
    {
        $request->validate([
            'dishName' => 'required',
            'description' => 'required',
            'foto_url' => 'required',
            'menuId' => 'required',

        ]);

        $dn1 = new Dish();
        $dn1->dishName = $request['dishName'];
        $dn1->description = $request['description'];
        $dn1->foto_url = $request['foto_url'];
        $dn1->menuId = $request['menuId'];
      
        return ($dn1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'menuName' => 'required',
            'restaurantId' => 'required'            
        ]);

        $dn1 = Dish::find($id);
        $dn1->menuName = $request['menuName'];
        $dn1->restaurantId = $request['restaurantId'];
          
        return ($dn1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }

    public function destroy($id)
    {
        return (Dish::destroy($id) == 1)
        ?  response()->json(['success' => 'success'], 204)
        :  response()->json(['error' => 'delete not successful'], 500);
    }
  

}
