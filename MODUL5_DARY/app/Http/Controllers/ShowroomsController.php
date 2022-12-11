<?php

namespace App\Http\Controllers;

use App\Models\Showrooms;
use Illuminate\Http\Request;

class ShowroomsController extends Controller
{
    public function mycar()
    {
        $list = Showrooms::where('user_id', auth()->user()->id)->get();
        if (count($list) == 0){
            return view('add-dary');
        }
        return view('listcar-dary', [
            'list' => $list
        ]);
    }

    public function add()
    {
        return view('add-dary');
    }
    
    public function read($id)
    {
        $carData = Showrooms::find($id)->first();
        return view('detail-dary', [
            'carData' => $carData
        ]);
    }

    public function edit($id)
    {
        $carData = Showrooms::find($id)->first();
        return view('edit-dary', [
            'carData' => $carData
        ]);
    }

    public function store(Request $req)
    {
        $foto_mobil_baru = rand(10000000,99999999) . '.' . $req->foto_mobil->extension();
        $req->foto_mobil->move(public_path('images'), $foto_mobil_baru);
        Showrooms::create([
            'name' => $req->nama_mobil,
            'owner' => $req->pemilik_mobil,
            'user_id' => auth()->user()->id,
            'brand' => $req->merk_mobil,
            'purchase_date' => $req->tanggal_beli,
            'description' => $req->deskripsi,
            'image' => $foto_mobil_baru,
            'status' => $req->status_pembayaran,
        ]);
        return redirect('/mycar');
    }

    public function delete($id)
    {
        Showrooms::where('id', $id)->delete();
        return redirect('/mycar');
    }

    public function update(Request $req, $id)
    {
        $car = Showrooms::find($id);
        if ($req->foto_mobil) {
            $foto_mobil_baru = rand(10000000,99999999) . '.' . $req->foto_mobil->extension();
            $req->foto_mobil->move(public_path('images'), $foto_mobil_baru);
        } else {
            $foto_mobil_baru = $car->foto_mobil;
        }
        $car->update([
            'name' => $req->nama_mobil,
            'owner' => $req->pemilik_mobil,
            'brand' => $req->merk_mobil,
            'purchase_date' => $req->tanggal_beli,
            'description' => $req->deskripsi,
            'image' => $foto_mobil_baru,
            'status' => $req->status_pembayaran,
        ]);
        return redirect('/mycar');
    }
}
