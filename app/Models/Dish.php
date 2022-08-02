<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dish extends Model
{
    use HasFactory;

    public $fillable = ['dishName', 'description', 'foto_url', 'menuId'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
