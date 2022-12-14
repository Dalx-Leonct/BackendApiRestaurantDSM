<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class ImageUploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        /**
         * Controlador para utilizar correctamente el image picker,
         * hace las validaciones de la imagen,
         * y mueve la imagen recibida a la carpeta public/images.
         */
        
        $validator = Validator::make($request->all(), ['image' => ['required', File::image()->max(2 * 1024)]]);
        if ($validator->fails()) return response()->json($validator->messages());

        $image = new Image();
        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->move(public_path('public/images'), $filename);
        $url = URL::to('/') . '/public/images/' . $filename;
        $image['url'] = $url;
        $image->save();

        return response()->json(['isSuccess' => true, 'url' => $url]);
    }
}
