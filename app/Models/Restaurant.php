<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'address'
    ];

    public function menu()
    {
        return $this->hasOne(Menu::class);
    }

    public function dishes()
    {
        return $this->hasMany('App\Models\Dishes');
    }
}
