<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Slider;
use App\Models\VisiMisi;
use App\Models\VideoProfil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        return view('/index', [
            'sliders'       => Slider::all(),
            'beritas'       => Berita::where('status_id', 2)->latest()->take(3)->get(),
            'videoProfil'   => VideoProfil::first(),
            'visiMisi'     => VisiMisi::first()
        ]);
    }
}
