<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use App\OrderTemp;
use App\User;
use Illuminate\Support\Facades\Auth;

class ObatBelanjaController extends Controller
{
    public function index()
    {
        $data = Obat::with("User")->where("idUser", "!=", Auth::id())->get();

        return view("obatBelanja.index", ["obatBelanjaList" => $data]);
    }

    public function store(Obat $obatBelanja)
    {

        $order = new OrderTemp();
        $order->idUser = Auth::id();
        $order->idObat = $obatBelanja->id;
        $order->status = "Menunggu pembayaran";
        $order->save();
        return redirect(route("obatBelanjaList"));
    }
}
