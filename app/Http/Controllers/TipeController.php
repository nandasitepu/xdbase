<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;
use Session;

class TipeController extends Controller
{
    // Assign Middleware Auth Only
    public function __construct()
    {
      $this->middleware('auth');
    }

    // List Tipe

    public function index() {

      $tipe = Tipe::orderBy('id', 'asc')->paginate(10);

      return view('data.tipe.index', compact('tipe'));
    }

    // Tambah Tipe
    public function store(Request $request)
    {
      // Validasi Form Tambah Tipe
      $this->validate($request,[
        'fullname'      => 'required|max:255',
      ]);

      // Simpan Data Layanan
      $tipe = new Tipe;

      $tipe->fullname  = $request->fullname;

      // Save All Form Data
      $tipe->save();

      // Flash Success Message
      Session::flash('success','Tipe Berhasil Ditambah !');

      // Back to The Index Page
      return redirect()->route('tipe.index');
    }

    public function edit($id)
    {
      $tipe = Tipe::find($id);

      return view('data.tipe.edit')->with('tipe', $tipe);
    }



    // Update Tipe
    public function update(Request $request, $id)
    {

      // Validasi Updated Tipe
      $this->validate($request,[

        'fullname'       => 'required|max:255',

      ]);

      // Set Data Updated Tipe
      $tipe = Tipe::find($id);

      $tipe->fullname   = $request->fullname;


      $tipe->save();

      // Flash Success Message
      Session::flash('success','Tipe Berhasil Diedit !');

      return redirect()->route('tipe.index');

    }



    // Delete Tipe
    public function destroy($id)
    {
      $tipe = Tipe::find($id);

      // Delete Penyedia Database
      $tipe->delete();

      // Flash Success Message
      Session::flash('success','Tipe Berhasil Dihapus !');
      return redirect()->route('tipe.index');
    }
}
