<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function ShowUploadForm()
    {
    	return view('file_1');

    	//return $request->all();
    }

    public function StoreFile(request $request)
    {
    	if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getclientSize();
            $request->file->store('public/upload');
            $new_file = new File;
            $new_file->name = $filename;
            $new_file->size =$filesize;
            $new_file->save();
            return response('ok');
    	}

    	return $request->all();
    }
}
