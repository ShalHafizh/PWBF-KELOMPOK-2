<?php

namespace App\Http\Controllers;
 
use App\Models\Barang;
use App\Models\jenisBarang;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $table_barang = Barang::all();
        $table_barang1 = jenisBarang::all();
        return view('pegawai.barang', ['table_barang'=>$table_barang], ['table_barang1'=>$table_barang1]);
    }

    public function insert()
    {
        $table_jenis_barang = jenisBarang::all();
        return view('pegawai.insert_barang', ['table_jenis_barang'=>$table_jenis_barang]);
    }
    
    public function create(Request $request){
        $data = $request->input();
			
		$barang = new Barang;

        $barang->nama_bar       = $data['nama_bar'];
        $barang->stock_barang   = $data['stock_barang'];
        $barang->harga_beli_bar = $data['harga_beli_bar'];
        $barang->harga_jual_bar = $data['harga_jual_bar'];
        $barang->id_jb          = $data['id_jb'];
		$barang->save();

        return redirect('homePegawai');
			
    }
    public function edit($id){
        $item = Barang::find($id);
        return view('pegawai.edit_barang', ['item'=>$item]);
    }
    public function update(Request $request,$id){
        $item = Barang::find($id);
        $item->delete();
        
        $data = $request->input();
        $barang = new Barang;
        $barang->nama_bar       = $data['nama_bar'];
        $barang->stock_barang   = $data['stock_barang'];
        $barang->harga_beli_bar = $data['harga_beli_bar'];
        $barang->harga_jual_bar = $data['harga_jual_bar'];
        $barang->id_jb          = $data['id_jb'];
        $barang->save();

        return redirect('homePegawai');
    }
    public function destroy($id){
        $item = Barang::find($id);
        $item->delete();
        return redirect('homePegawai');
    }

}
