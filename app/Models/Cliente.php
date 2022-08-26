<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['cedula', 'nombre', 'apellidos', 'fecha_nac'];

    public static function search($query =''){
        if(!$query){
            return self::all();
        }
        return self::where('nombre', 'like', "%$query%")
        ->orWhere('apellidos', 'like', "%$query%")
        ->orWhere('cedula', 'like', "%$query%")
        ->get();
    }
}
