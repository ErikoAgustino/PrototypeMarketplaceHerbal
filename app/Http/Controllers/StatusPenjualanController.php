<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\OrderTemp;
use App\User;
use App\Obat;


class StatusPenjualanController extends Controller
{
    public function index()
    {
        $data = OrderTemp::with("User")->with("Obat")->get()->where("obat.idUser", "=", Auth::id());

        return view("statusPenjualan.index", ["statusPenjualanList" => $data]);
    }

    public function update(OrderTemp $penjualan)
    {
        $penjualan->status = "Dalam Pengiriman";
        $penjualan->save();
        return redirect(route("statusPenjualanList"));
    }
}
