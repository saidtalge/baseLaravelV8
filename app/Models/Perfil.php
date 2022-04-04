<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permissoes;

class Perfil extends Model
{
    use HasFactory;
    protected $table='perfil';

    protected $fillable = [
        'name', 
        'status'
    ];

    public function permissoes()
    {
        return $this->hasMany(Permissoes::class);
    }
}
