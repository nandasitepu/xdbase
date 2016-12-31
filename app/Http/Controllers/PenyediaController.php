<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Penyedia;

class PenyediaController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
      $penyedia = Penyedia::orderBy('created_at', 'desc')->paginate(6);

      return view('data.penyedia.index')->with('penyedia', $penyedia);
    }

    // Authenticated User Only

    public function create()
    {
      return view('data.penyedia.create');
    }

}
