<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orders;
use App\Obat;

class OrderDetails extends Model
{
    public function Orders()
    {
        return $this->hasOne(Orders::class, "idUser", "id");
    }

    public function Obat()
    {
        return $this->hasOne(Obat::class, "idObat", "id");
    }

    protected $table = "orderDetails";
    protected $primaryKey = "id";

    protected $fillable = [
        "id",
        "idOrder",
        "idObat"
    ];
}
