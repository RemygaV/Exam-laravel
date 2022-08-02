<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        return Menu::all();
    }

    public function show($id)
    {
        return Menu::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'menuName' => 'required',
            'restaurantId' => 'required'           
        ]);

        $mn1 = new Menu();
        $mn1->menuName = $request['menuName'];
        $mn1->restaurantId = $request['restaurantId'];
      
        return ($mn1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'menuName' => 'required',
            'restaurantId' => 'required'            
        ]);

        $mn1 = Menu::find($id);
        $mn1->menuName = $request['menuName'];
        $mn1->restaurantId = $request['restaurantId'];
          
        return ($mn1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }

    public function destroy($id)
    {
        return (Menu::destroy($id) == 1)
        ?  response()->json(['success' => 'success'], 204)
        :  response()->json(['error' => 'delete not successful'], 500);
    }

}
