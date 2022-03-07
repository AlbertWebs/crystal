<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;

class DropzoneController extends Controller
{

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
        return view('admin.dropzone');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        // add to dDatabase
        $Photos = new Photo;
        $Photos->name  = $imageName;
        $Photos->path = public_path('images');
        $Photos->save();

        return response()->json(['success'=>$imageName]);
    }

}
