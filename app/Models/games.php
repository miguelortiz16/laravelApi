<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    use HasFactory;
    protected $filable=['id','idGame','arrayGame','turn',"player1","player2"];
}
