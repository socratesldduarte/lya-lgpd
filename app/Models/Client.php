<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use socratesldduarte\DBEncryption\Traits\EncryptedAttribute;

class Client extends Model
{
    use HasFactory, SoftDeletes, EncryptedAttribute;

    protected $fillable = ['name', 'email', 'document', 'birthday', 'password'];
    protected $dates = ['birthday', 'created_at', 'updated_at', 'deleted_at'];


    protected $encryptable = [
        'name',
        'email',
        'document',
    ];
}
