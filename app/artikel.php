<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table ='artikels';
    protected $fillable = ['judul','kategoriartikels_id','gambar','deskripsi','slug'];
    public $timestamps = true;

    public function kategoriartikels()
    {
        return $this->belongsTo('App\kategoriartikels','kategoriartikels_id');
    }
}
