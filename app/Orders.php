<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    public function user()
    {
        return $this->hasOne(USER::class, "idUser", "id");
    }

    protected $table = "orders";
    protected $primaryKey = "id";

    protected $fillable = [
        "id",
        "orderDate",
        "totalHarga",
        "status",
        "idUser"
    ];
}
