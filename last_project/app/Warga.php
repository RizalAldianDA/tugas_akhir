<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = "wargas";
    protected $primarykey = "id";
    protected $fillable = [
        'nik','nokk','nama','gender','tanggal_lahir','rt','rw',
    ];
}
