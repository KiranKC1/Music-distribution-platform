<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use Storage;

class SongController extends Controller
{
    public function Store(Request $request)
    {
        
        if ($request->hasFile('song')) {
            $sangeet = new Song;
            $sangeet->title = $request->song->getClientOriginalName();
            $sangeet->file = $request->song->getClientOriginalName();
            $sangeet->save();
            $request->song->storeAs('songs', $request->song->getClientOriginalName());
            return redirect()->back();
        }
  
    }

    public function getSongs($filename)
    {
        return response()->download(storage_path('app/public/songs/' . $filename));
    }

    public function DownloadZip()
    {
        return response()->download(storage_path('app/public/songs/Pahenlo Batti Muni.zip'));
    }

    public function UserDownloadZip($uuid,$access_code)
    {
        return response()->download(storage_path('app/public/songs/Pahenlo Batti Muni.zip'));
    }
}
