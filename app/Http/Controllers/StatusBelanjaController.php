<?php

namespace App\Http\Controllers;

use App\OrderTemp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Obat;
use App\User;

class StatusBelanjaController extends Controller
{
    public function index()
    {
        $data = OrderTemp::with("User")->with("Obat")->where("idUser", "=", Auth::id())->get();

        return view("statusBelanja.index", ["statusBelanjaList" => $data]);
    }
}
