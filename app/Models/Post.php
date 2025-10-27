<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = ['title', 'content'];

    public function fromDateTime($value)
    {
        // Convierte a un formato que SQL Server pueda leer correctamente
        return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    }
}
