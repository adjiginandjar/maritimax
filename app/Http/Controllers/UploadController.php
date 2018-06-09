<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UploadController extends Controller
{

    public function uploadSingle(Request $request)
    {
      if($request->has('file')){
        $file = $request->file('file');
  		  $fileName= time().trim($file->getClientOriginalName());
  		  $file->move('images', $fileName);
      }

      return url('/').'/images/'.$fileName;
    }


}
