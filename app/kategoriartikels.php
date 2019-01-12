<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriartikels extends Model
{
    protected $table ='kategoriartikels';
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->HasMany('App\kategoriartikels','kategoriartikels_id');
    }
}
