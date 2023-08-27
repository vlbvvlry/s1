<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;

use App\Models\Picture;

class PictureController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Need to move in Storage
        $upload_image = '/images/' . basename($_FILES['userfile']['name']);
        copy($_FILES['userfile']['tmp_name'], PUBLIC_DIR.$upload_image);

        $data = [];
        $data['url'] = $upload_image;
        $picture = Picture::create($data);

        return redirect(route('gallery.show'));
    }

    public function remove(Request $request): RedirectResponse 
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'integer'],
        ]);
        $validated = $validator->validate();
        
        $picture = Picture::find($validated['id']);
        $picture->delete();

        return redirect(route('gallery.show'));
    }
}
