<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Obat;

class OrderTemp extends Model
{
    public function user()
    {
        return $this->hasOne(USER::class, "id", "idUser");
    }

    public function obat()
    {
        return $this->hasOne(Obat::class, "id", "idObat");
    }

    protected $table = "orderTemp";
    protected $primaryKey = "id";

    protected $fillable = [
        "id",
        "idUser",
        "idObat",
        "status"
    ];
}
