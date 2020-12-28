<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class DataKirim extends Model
{
    protected $table = 'data_kirim';
    public $timestamps = false;

    use Notifiable;
    //use Uuid;

    protected $fillable = [
        'id', 'jabatan_id', 'pegawai_id', 'redaksi'
    ];
}
