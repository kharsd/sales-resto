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
            $data = Menu::where('nama', 'LIKE', '%' .$request->search. '%')->get();
        }else{
            $data = Menu::all();
        }
        return view ('administrator.menu', ['data'=>$data]);
        // return view('administrator.menu', compact(
            //     'data'
            // ));
    } 
        
    public function tambah()
    {
        // $model = new Menu;
        return view ('administrator.menuTambah');
        // return view('administrator.menuTambah', compact(
        //     'model'
        // ));
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
        // $menu = Menu::find($id)->first();
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
        // Menu::where('id', $id)->first();

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
