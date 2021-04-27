<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;
    protected $table = "reclamo";
    protected $primaryKey = "id";
    public $timestamps = false;
}
