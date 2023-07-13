<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('manajer./menu');
    // }
    public function index(Request $request)
    {
        if($request){
            $data = Menu::orderBy('kategori', 'ASC')
                            ->orderBy('nama', 'ASC')
                            ->where('nama', 'LIKE', '%' .$request->search. '%')
                            ->orWhere('kategori', 'LIKE', '%' .$request->search. '%')
                            ->get();
        }else{
            $data = Menu::all();
        }
        return view ('administrator.menu', ['data'=>$data]);
    } 
        
    public function tambah()
    {
        return view ('administrator.menuTambah');
    }
    
    public function simpan(Request $request){
        $data = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            //nama di db => nama di menuTambah u/ name=''
        ];

        Menu::create($data);

        return redirect()->route('menu');
    }

    public function edit($id){
        $menu = Menu::where('id', $id)->first();

        return view('administrator.menuEdit', ['menu'=>$menu]);
    }

    public function update($id, Request $request){
        $data = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            //nama di db => nama di menuTambah u/ name=''
        ];

        Menu::find($id)->update($data);
        return redirect()->route('menu');
    }

    public function hapus($id){
        Menu::find($id)->delete();
        return redirect()->route('menu');
    }

    public function manajer()
    {
        return view('manajer.menu');
    }
}
