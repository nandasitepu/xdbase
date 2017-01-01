<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;

class TipeController extends Controller
{
    public function index() {

      $tipe = Tipe::all();

      return view('data.tipe.index', compact('tipe'));
    }
}
