<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Penyedia;
use App\Tipe;
use Image;
use Session;

class PenyediaController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', ['except' => ['index']]);
    }

    public function index(Request $request)
    {
      $penyedia = Penyedia::orderBy('created_at', 'desc')->paginate(6);

      if ($request->ajax()) {
      $view = view('data.penyedia.ajax',compact('penyedia'))->render();
        return response()->json(['html'=>$view]);
      }

      return view('data.penyedia.index', compact('penyedia'));
    }

    // Khusus Login User

    public function create()
    {
      $tipe = Tipe::all();
      return view('data.penyedia.create', compact('tipe'));
    }

    public function store(Request $request)
    {
      // Validasi Penyedia
      $this->validate($request,[
        'image'          => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'fullname'       => 'required|max:255',
        'shortname'      => 'required|max:150',
        'slug'           => 'required',
        'desc'           => 'required',
        'contact'        => 'required',

        'tipe_id'        => 'required|integer',
      ]);

      // Simpan Data Penyedia
      $penyedia = new Penyedia;

      $penyedia->fullname   = $request->fullname;
      $penyedia->shortname  = $request->shortname;
      $penyedia->slug       = $request->slug;
      $penyedia->desc       = $request->desc;
      $penyedia->contact    = $request->contact;

      $penyedia->tipe_id    = $request->tipe_id;

      // Simpan Image
      if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time(). '.'. $image->getClientOriginalName();
        $location = public_path('storage/img/penyedia/') . $filename;
        Image::make($image)->resize(400,400)->save($location);

        $penyedia->image = $filename;
      }

      $penyedia->save();

      // Flash Success Message
      Session::flash('success','Penyedia Berhasil Ditambah !');

      return redirect()->route('penyedia.index');
    }

    public function show($id) {

      $tipe = Tipe::all();
      $penyedia = Penyedia::find($id);

      return view ('data.penyedia.show')->with('tipe', $tipe)->with('penyedia', $penyedia);
    }


    public function edit()
    {
      $tipe = Tipe::all();
      return view('data.penyedia.create', compact('tipe'));
    }
}
