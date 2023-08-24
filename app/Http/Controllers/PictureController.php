<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Picture;

class PictureController extends Controller
{
    public function store(Request $request) {
        $upload_image_dir = '/images/';
        $upload_image = $upload_image_dir . basename($_FILES['userfile']['name']);
        copy($_FILES['userfile']['tmp_name'], PUBLIC_DIR.$upload_image);
        //
        $data = [];
        $data['url'] = $upload_image;
        ////
        $picture = Picture::create($data);
        //////
        return redirect(route('gallery.show'));
    }
}
