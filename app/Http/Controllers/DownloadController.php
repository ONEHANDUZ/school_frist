<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DownloadController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->file;
        $file_path = public_path("neededfiles/$data");
        if(file_exists($file_path) & $data==!null){
            return response()->download($file_path);
        }
        else{
            return redirect('needed');
        }
    }
}
