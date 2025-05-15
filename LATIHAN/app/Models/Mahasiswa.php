<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    public function prodi(): HasOneOrMany{
        return $this->belongTo(Prodi::class);
    }
=======

class Mahasiswa extends Model
{
    //
>>>>>>> ce350605ab7ba9f1d37935772789681a1ab8c394
}
