<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Picture;

class GalleryController extends Controller
{
    public function show() : View {
        $pictures = Picture::all();
        return view('welcome', ['pictures' => $pictures]);
    }
}
