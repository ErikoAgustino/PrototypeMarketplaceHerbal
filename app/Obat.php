<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Obat extends Model
{
    public function user()
    {
        return $this->hasOne(USER::class, "id", "idUser");
    }

    protected $table = "obat";
    protected $primaryKey = "id";

    protected $fillable = [
        "id",
        "idUser",
        "nama",
        "deskripsi",
        "harga"
    ];
}
