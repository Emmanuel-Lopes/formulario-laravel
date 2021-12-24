<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Cadastro extends model {
    public $timestamps = false;
    protected $fillable = ['nome','cpf','rg','nasc','mae','pai',
                            'email','tel1','tel2','logr','num',
                            'comp','cep','cidade','uf','pais'];
}