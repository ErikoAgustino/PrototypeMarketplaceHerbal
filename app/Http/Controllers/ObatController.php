<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use App\User;
use Illuminate\Support\Facades\Auth;

class ObatController extends Controller
{
    public function index()
    {
        //->where("idUser ==" +  Auth::id())
        $data = Obat::with("User")->where("idUser", "=", Auth::id())->get();

        return view("obat.index", ["obatList" => $data]);
    }

    public function create()
    {
        $data = Obat::with("User")->where("idUser", "=", Auth::id())->get();
        return view("obat.create", ["obatList" => $data]);
    }

    public function store(Request $request)
    {
        $data = validator($request->all(), [
            "idUser" => 'required',
            "nama" => 'required',
            "deskripsi" => 'required',
            "harga" => 'required'
        ])->validate();

        $new = new Obat($data);
        $new->save();
        return redirect(route("obatList"));
    }

    public function edit(Obat $obat)
    {
        return view("obat.edit", ["obat" => $obat]);
    }

    public function update(Request $request, Obat $obat)
    {
        $data = validator($request->all(), [
            "id",
            "idUser",
            "nama",
            "deskripsi",
            "harga"
        ])->validate();
        $obat->idUser = $data["idUser"];
        $obat->nama = $data["nama"];
        $obat->deskripsi = $data["deskripsi"];
        $obat->harga = $data["harga"];
        $obat->save();
        return redirect(route("obatList"));
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect(route("obatList"));
    }
}
