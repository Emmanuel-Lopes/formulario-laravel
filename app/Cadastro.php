<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pai;

class Cadastro extends model {

    public $timestamps = false;

    protected $fillable = ['nome','cpf','rg','nasc','email',
                            'tel1','tel2','logr','num',
                            'comp','cep','cidade','uf','pais'];

    public function paisId() {
        
        return $this -> hasMany(Pai :: class);
    }
}