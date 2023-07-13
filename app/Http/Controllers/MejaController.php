<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    
    public function manajer()
    {
        return view('manajer.meja');
    }

    public function kasir()
    {
        return view('kasir.meja');
    }

    public function admin(Request $request)
    {
        if($request){
            $data = Meja::where('no_meja', 'LIKE', '%' .$request->search. '%')->orderBy('no_meja', 'asc')->get();
        }else{
            $data = Meja::all();
        }

        return view ('administrator.meja', ['data'=>$data]);
    }

    public function tambah()
    {
        return view ('administrator.mejaTambah');
    }
    
    public function simpan(Request $request){
        $data = [
            'no_meja' => $request->no_meja,
            'harga' => $request->harga,
            //nama di db => nama di menuTambah u/ name=''
        ];

        Meja::create($data);

        return redirect()->route('meja');
    }

    public function edit($id){
        // $menu = Menu::find($id)->first();
        $meja = Meja::where('id', $id)->first();

        return view('administrator.mejaEdit', ['meja'=>$meja]);
    }

    public function update($id, Request $request){
        $data = [
            'no_meja' => $request->no_meja,
            'harga' => $request->harga,
            //nama di db => nama di menuTambah u/ name=''
        ];

        Meja::find($id)->update($data);
        return redirect()->route('meja');
    }

    public function hapus($id){
        Meja::find($id)->delete();
        return redirect()->route('meja');
    }
}