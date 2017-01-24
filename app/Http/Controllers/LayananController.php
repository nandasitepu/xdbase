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
        //
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
        //
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
