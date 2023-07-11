<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('manajer./meja');
    // }
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
        // return view('administrator.meja');
        // $data = Meja::all();
        // return view ('administrator.meja', ['data'=>$data]);
    }

    public function tambah()
    {
        // $model = new Menu;
        return view ('administrator.mejaTambah');
        // return view('administrator.menuTambah', compact(
        //     'model'
        // ));
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
        // Menu::where('id', $id)->first();

        return redirect()->route('meja');
    }

    public function hapus($id){
        Meja::find($id)->delete();

        return redirect()->route('meja');
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
