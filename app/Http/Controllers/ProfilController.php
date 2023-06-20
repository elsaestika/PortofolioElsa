<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    
    // function profil(){
    //     $profil = Profil::
    // }
    function show(){
        $profil = Profil::first();
        if ($profil){
            $data = [
                'nis' => $profil->nis,
                'nama' => $profil->nama,
                'jk' => $profil->jk,
                'ttl' => $profil->ttl,
                'pendidikan' => $profil->pendidikan,
                'alamat' => $profil->alamat,
                'foto' => $profil->foto,
                'about' => $profil->about,
                'action' => '/profil/update/'.$profil->nis
            ];
        return view('profil',$data);
    }else{
        $data =[
            'nis' => '',
            'nama' => '',
            'jk' => '',
            'ttl' => '',
            'pendidikan' => '',
            'alamat' => '',
            'foto' => '',
            'about' => '',
            'action' => '/profil/create/'
        ];
        return view ('profil',$data);
    }
}
    function create(Request $request){
        $validate = $this->validate($request,[
            'nis' => 'required|numeric',
            'nama' => 'required|string',
            'jk' => 'required|string',
            'ttl' => 'string',
            'pendidikan' => 'required|string',
            'alamat' => 'required|string',
            'foto' => 'required|mimes:jpg,png,jpeg',
            'about' => 'required|string',
        ]);
        $namafile=$request->nis.".".$request->file('foto')->getClientOriginalExtension();
        $validate['foto'] = $request->file('foto')->storeAs('foto',$namafile);
        Profil::create($validate);

        return redirect('profil');
    }
    function hapus($id){
        Profil::where('nis',$id)->delete();
        return redirect('profil');
    } 
    function edit($id){
        $data['profil'] = Profil::find($id);
        $data['action'] = url('profil/update').'/'.$data['profil']->nis;
        $data['tombol'] = "Update";
        return view('profil',$data);
    } 
    function update(Request $request){
        $data = Profil::where('nis',$request->nis)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }

        Profil::where('nis',$request->nis)->update([
            'nis' => $request->nis,
            'nama' => $request->nama, 
            'jk' => $request->jk,
            'ttl' => $request->ttl,
            'pendidikan' => $request->pendidikan, 
            'alamat' => $request->alamat,
            'about' => $request->about,
            'foto' => $foto,
        ]);
        return redirect('profil');
    }
    // function search(Request $request){
    //     $data['murid'] = Profil::where('nis',$request->cari) 
    //     ->orWhere('nama','like',$request->cari."%")
    //     ->orWhere('jk',$request->cari)
    //     ->paginate();

    //     $data['cari'] = $request->cari;
    //     return view('Profil',$data);
    // }
}

