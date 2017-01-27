<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Penyedia;
use App\Layanan;


class LayananController extends Controller
{
    // Assign Middleware Auth Only except Index & Show
    public function __construct()
    {
      $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    //  Set Index Controller With Ajax For Loading More Data
    public function index()
    {
        $layanan = Layanan::all();

        return view ('data.layanan.index')->with('layanan', $layanan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layanan = Layanan::all();
        return view ('data.layanan.create')->with('layanan', $layanan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validasi Form Tambah Layanan
      $this->validate($request,[
        'gambar'        => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'nama'          => 'required|max:255',
        'slug'          => 'required',
        'detail'        => 'required',
        'syarat'        => 'required',
        'waktu'         => 'required',
        'biaya'         => 'required',
        'kontak'        => 'required',
        'info'          => 'required',

        'penyedia_id'   => 'required|integer',
      ]);

      // Simpan Data Layanan
      $layanan = new Layanan;

      $layanan->nama            = $request->nama;
      $layanan->slug            = $request->slug; // URL
      $layanan->detail          = $request->detail;
      $layanan->syarat          = $request->syarat;
      $layanan->waktu           = $request->waktu;
      $layanan->biaya           = $request->biaya;
      $layanan->kontak          = $request->kontak;
      $layanan->info            = $request->info;

      $layanan->penyedia_id     = $request->penyedia_id;

      // Upload Image and Set to Database
      if($request->hasFile('gambar')) {
        $image = $request->file('gambar');
        $filename = time(). '.'. $image->getClientOriginalName();
        $location = public_path('storage/img/layanan/') . $filename;
        Image::make($image)->resize(400,400)->save($location);
        // Set Image Name to Database
        $layanan->gambar = $filename;
      }

      // Save All Form Data
      $layanan->save();

      // Flash Success Message
      Session::flash('success','Layanan Berhasil Ditambah !');

      // Back to The Index Page
      return redirect()->route('layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penyedia = Penyedia::find($id);

        $layanan = Layanan::find($id);

        return view ('data.layanan.show')->with('penyedia', $penyedia)->with('layanan', $layanan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $layanan = Layanan::find($id);
      return view ('data.layanan.edit')->with('layanan', $layanan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
