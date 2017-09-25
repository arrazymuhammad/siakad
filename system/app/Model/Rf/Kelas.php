<?php

namespace App\Model\Rf;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'rf_kelas';


    public function Angkatan()
    {
        return $this->belongsTo('\App\Model\Rf\Angkatan', 'id_angkatan');
    }

    public function Mahasiswa()
    {
    	return $this->hasMany('\App\Model\Ms\Mahasiswa', 'id_kelas');
    }

	public function Pertemuan()
    {
    	return $this->hasMany('\App\Model\Tr\Pertemuan', 'id', 'id_kelas');
    }

}
