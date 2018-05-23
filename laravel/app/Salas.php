<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    //
    protected $table = 'salas';

    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected  $fillable = [
    'descricao',
    'nome',
    ];
    
    
    protected $casts = [
        'descricao' => 'text',
        'nome' => 'text',
    ];
    
    protected $maps =[
        'descricao' => 'salas_descricao',
        'nome' => 'salas_nome',
];

    public function rota()
    {
        return $this->hasMany('App\Rota');
    }
    
    public function campus()
    {
        return $this->belongsTo('App\Campus','salas_fk_campuss');
    }
    public function bloco()
    {
        return $this->belongsTo('App\Bloco','salas_fk_blocos');
    }

}
