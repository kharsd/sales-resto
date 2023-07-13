<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Middleware\Kasir;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class KasirController extends Controller
{
//------------- Administrator -------------
    public function index(Request $request)
    {
        if($request){
            $data = User::where('role_id', '2')
                            ->where('name', 'LIKE', '%' .$request->search. '%')
                            ->orderBy('name', 'asc')->get();
        }else{
            $data = User::all();
        }

        return view ('administrator.kasir', ['data'=>$data]);
    } 
        
    public function tambah()
    {
        return view ('administrator.kasirTambah');
    }
    
    public function simpan(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            //nama di db => nama di menuTambah u/ name=''
        ];

        User::create($data);

        return redirect()->route('kasir');
        // $validatedData = $request->validate([
        //     'nama' => ['required', 'max:225'],
        //     'email' => ['required', 'email:dns', 'unique:users'],
        //     'password' => ['required'],
        // ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // // $validatedData['password'] = Hash::make($validatedData['password']);
        // User::create($validatedData);
        
        // return redirect()->route('kasir');
    }

    public function hapus($id){
        User::find($id)->delete();
        return redirect()->route('kasir');
    }

//------------- Kasir -------------
    public function home(){
        return view ('kasir.home');
    }
}
