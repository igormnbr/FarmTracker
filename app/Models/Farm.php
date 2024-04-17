<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'proprietario', 
        'propriedade', 
        'area_total', 
        'area_util', 
        'qtd_gado', 
        'qtd_machos', 
        'qtd_femeas',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
