<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pai extends Model {
    
    public $timestamps = false;

    protected $fillable = ['pai_mae'];

    public function cadastros() {

        return $this -> belongsTo(Cadastro :: class);
    }
}
