<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'album';
    protected $primaryKey = 'id' ;
    protected $fillable =[
        'NamaAlbum',
        'Deskripsi',
        'TanggalDiBuat',
        'id_user'
    ];

    public $timestamps = false;
}
