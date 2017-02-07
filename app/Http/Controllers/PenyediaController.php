<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Penyedia;
use App\Tipe;
use Image;
use Session;
use Storage;

class PenyediaController extends Controller
{
    // Assign Middleware Auth Only except Index & Show
    public function __construct()
    {
      $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    //  Set Index Controller With Ajax For Loading More Data
    public function index(Request $request)
    {
      $penyedia = Penyedia::orderBy('created_at', 'desc')->paginate(4);

      if ($request->ajax()) {
      $view = view('data.penyedia.ajax',compact('penyedia'))->render();
        return response()->json(['html'=>$view]);
      }

      return view('data.penyedia.index', compact('penyedia'));
    }

    // Going to Form Tambah Penyedia View
    public function create()
    {
      $tipe = Tipe::all();

      return view('data.penyedia.create', compact('tipe'));
    }


    // Add More Penyedia
    public function store(Request $request)
    {
      // Validasi Form Tambah Penyedia
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

      // Upload Image and Set to Database
      if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time(). '.'. $image->getClientOriginalName();
        $location = public_path('storage/img/penyedia/') . $filename;
        Image::make($image)->resize(400,400)->save($location);
        // Set Image Name to Database
        $penyedia->image = $filename;
      }

      // Save All Form Data
      $penyedia->save();

      // Flash Success Message
      Session::flash('success','Penyedia Berhasil Ditambah !');

      // Back to The Index Page
      return redirect()->route('penyedia.index');
    }

    // Showing Detail Penyedia
    public function show($id) {

      $tipe = Tipe::all();
      $penyedia = Penyedia::find($id);

      return view ('data.penyedia.show')->with('tipe', $tipe)->with('penyedia', $penyedia);
    }

    // Edit Penyedia
    public function edit($id)
    {
      $tipe = Tipe::all();
      $penyedia = Penyedia::find($id);

      return view('data.penyedia.edit')->with('tipe', $tipe)->with('penyedia', $penyedia);
    }


    // Update Penyedia
    public function update(Request $request, $id)
    {

      // Validasi Updated Penyedia
      $this->validate($request,[
        'image'          => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'fullname'       => 'required|max:255',
        'shortname'      => 'required|max:150',
        'slug'           => 'required',
        'desc'           => 'required',
        'contact'        => 'required',

        'tipe_id'        => 'required|integer',
      ]);

      // Set Data Updated Penyedia
      $penyedia = Penyedia::find($id);

      $penyedia->fullname   = $request->fullname;
      $penyedia->shortname  = $request->shortname;
      $penyedia->slug       = $request->slug;
      $penyedia->desc       = $request->desc;
      $penyedia->contact    = $request->contact;

      $penyedia->tipe_id    = $request->tipe_id;

      // Set Updated Image
      if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time(). '.'. $image->getClientOriginalName();
        $location = public_path('storage/img/penyedia/') . $filename;
        Image::make($image)->resize(400,400)->save($location);
        // Image Lama
        $oldFilename = $penyedia->image;
        // Update Database
        $penyedia->image = $filename;
        // Delete Image Lama
        Storage::delete($oldFilename);
      }

      $penyedia->save();

      // Flash Success Message
      Session::flash('success','Penyedia Berhasil Diedit !');

      return redirect()->route('penyedia.index');

    }

    // Delete Penyedia
    public function destroy($id)
    {
      $penyedia = Penyedia::find($id);

      // Delete Penyedia Image
      Storage::delete($penyedia->image);

      // Delete Penyedia Database
      $penyedia->delete();

      // Flash Success Message
      Session::flash('success','Penyedia Berhasil Dihapus !');
      return redirect()->route('penyedia.index');
    }

}
