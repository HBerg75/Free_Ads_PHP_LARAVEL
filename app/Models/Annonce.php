<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $table = "annonces";
protected $fillable = [
'id_users',
'title',
'description',
'photo',
'localisation',
'price', ];
}
