<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginTest extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $datadb = ['name', 'email', 'password', 'created_at', 'updated_at'];

}
