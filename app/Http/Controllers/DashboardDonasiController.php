<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use Illuminate\Support\Facades\Auth;

class DashboardDonasiController extends Controller
{
    public function indexdetaildonasi()
    {
        return view('donasi.detaildonasi'); 
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'jumlah_barang'=> 'required',
            'nama_barang'=> 'required',
            'kategori_barang'=> 'required',
            'detail_barang'=> 'required'
        ]);

        $user_id = Auth::id();
        $donasisubmission = Donasi::create([
            'user_id'=> $user_id,
            'jumlah_donasi'=> $request->input('jumlah_donasi'),
            'nama_barang'=> $request->input('nama_barang'),
            'kategori_barang'=> $request->input('kategori_barang'),
            'detail_barang'=> $request->input('detail_barang')

        ]);

        return redirect ('dashboard.index-users');
        //return redirect()->route('dashboard.index-users');
    }
}