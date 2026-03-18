<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContact extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'motivo_contato_id', 'mensagem'];
}
